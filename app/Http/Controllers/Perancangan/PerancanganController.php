<?php

namespace App\Http\Controllers\Perancangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonJadwal;
use App\Models\JadwalPengganti;
use App\Models\Terjadwalkan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Classes\Populasi;
use Illuminate\Support\Facades\Validator;

class PerancanganController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->Populasi = new Populasi();
    }

    public function index(Request $request){
        $mahasiswa = Person::where('status_person_id', 2)
            ->whereHas('jadwalPerson')
            ->with('jadwalPerson')
            ->orderBy('name')
            ->get();
        $pembimbing = Person::where('status_person_id', 1)
            ->whereHas('jadwalPerson')
            ->with('jadwalPerson')
            ->orderBy('name')
            ->get();
        $narsum_1 = Person::where('status_person_id', 1)
            ->whereHas('jadwalPerson')
            ->with('jadwalPerson')
            ->orderBy('name')
            ->get();
        $narsum_2 = Person::where('status_person_id', 1)
            ->whereHas('jadwalPerson')
            ->with('jadwalPerson')
            ->orderBy('name')
            ->get();

        return view('admin.perancangan.index')
            ->with('mahasiswa', $mahasiswa)
            ->with('pembimbing', $pembimbing)
            ->with('narsum_1', $narsum_1)
            ->with('narsum_2', $narsum_2);
    }

    public function rancang(Request $request){
        $generated_id = self::generateUniqueCode();

        // populasi
        $mahasiswa = $this->Populasi->pembangunanKromosom($request->mahasiswa);
        $pembimbing = $this->Populasi->pembangunanKromosom($request->pembimbing);
        $narsum_1 = $this->Populasi->pembangunanKromosom($request->narsum_1);
        $narsum_2 = $this->Populasi->pembangunanKromosom($request->narsum_2);

        // algen
        foreach(range(0, 19) as $hh){
            foreach(range(0, 19) as $kk){
                foreach(range(0, 19) as $jj){
                    foreach(range(0, 19) as $ii){
                        // perhitungan status = HX
                        $hx = ( $mahasiswa[$ii]->status + $pembimbing[$ii]->status + $narsum_1[$ii]->status + $narsum_2[$ii]->status )/4;
                        // perhitungan hari dan jam = YZ
                        $yz = [];
                        array_push( $yz, ($mahasiswa[$ii]->hari * 3 + $mahasiswa[$ii]->jam * 5) );
                        array_push( $yz, ($pembimbing[$ii]->hari * 3 + $pembimbing[$ii]->jam * 5) );
                        array_push( $yz, ($narsum_1[$ii]->hari * 3 + $narsum_1[$ii]->jam * 5) );
                        array_push( $yz, ($narsum_2[$ii]->hari * 3 + $narsum_2[$ii]->jam * 5) );
                        $YZ = array_product($yz);

                        // kasus akar = a
                        $akar = [];
                        foreach (range(0, 3) as $number) {
                            if ($YZ**(1/4) == $yz[$number]){
                                array_push($akar, 0);
                            }
                            else {
                                array_push($akar, 1);
                            }
                        }
                        $a = array_sum($akar);

                        // fitness = h
                        $h = 1/($a + $hx + 1);
                        if($h >= 0.8) {
                            // simpan pada jadwal pengganti
                            $jadwal_pengganti = JadwalPengganti::updateOrCreate(
                                [
                                    'peserta_id' => $mahasiswa[$ii]->person_id,
                                    'pembimbing_id' => $pembimbing[$ii]->person_id,
                                    'narsum_id' => $narsum_1[$ii]->person_id,
                                    'narsum_nd_id' => $narsum_2[$ii]->person_id,
                                    'hari_jam' => $mahasiswa[$ii]->hari_jam,
                                    'fitness' => $h,
                                ],
                                [ 'generated_id' => $generated_id ]
                            );
                        }
                    }
                    $mahasiswa = $this->Populasi->rekombinasi($mahasiswa);
                }
                $pembimbing = $this->Populasi->rekombinasi($pembimbing);
            }
            $narsum_1 = $this->Populasi->rekombinasi($narsum_1);
        }

        return redirect()->route('admin.perancangan.setup', ['generated_id' => $generated_id]);
    }

    public function setupJadwal(Request $request){
        $jadwal_pengganti = JadwalPengganti::where('generated_id', $request->generated_id)
            ->orderBy('fitness', 'DESC')
            ->limit(5)
            ->get();

        $pengisi = JadwalPengganti::where('generated_id', $request->generated_id)
            ->with('peserta')
            ->with('pembimbing')
            ->with('narsum')
            ->with('narsumNd')
            ->first();

        return view('admin.perancangan.setup')
            ->with('jadwal_pengganti', $jadwal_pengganti)
            ->with('pengisi', $pengisi);
    }

    public static function store(Request $request){
        $validator = Validator::make($request->all(), [
            'status_ujian_id' => 'required',
            'peserta_id' => 'required',
            'pembimbing_id' => 'required',
            'narsum_id' => 'required',
            'narsum_nd_id' => 'required',
            'hari_jam' => 'required',
            'ruangan_id' => 'required',
            'judul' => 'required',
            'tanggal' => 'required|date',
            'generated_id' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('danger','Penambahan Gagal');
            return redirect()->route('admin.perancangan.setup', ['generated_id' => $request->generated_id])->withErrors($validator);
        }

        // dd($validator->validated()['ruangan_id']);

        DB::beginTransaction();
        try {
            $terjadwalkan = Terjadwalkan::create($validator->validated());
            $person_jadwal = PersonJadwal::updateTerjadwalkan($validator->validated());
            DB::commit();
            session()->flash('success','Penambahan Berhasil');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger','Penambahan Gagal');
        }

        // ingat update pada jadwal person di status, hari_jam, status_kepesertaan, dan status_ujian_id
        return redirect()->route('home');
    }

    public static function destroy($id){
        $terjadwalkan = Terjadwalkan::where('id', $id);

        $find_id_kepesertaan = $terjadwalkan->first();
        $jadwal_semula = PersonJadwal::removeTerjadwalkan($find_id_kepesertaan);

        try{
            $delete = $terjadwalkan->delete();
            session()->flash('success','Penghapusan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penghapusan Gagal');
        }

        return redirect()->route('home');
    }

    public static function terlaksana($id){
        $terjadwalkan = Terjadwalkan::where('id', $id);

        $find_id_kepesertaan = $terjadwalkan->first();
        $jadwal_semula = PersonJadwal::removeTerjadwalkan($find_id_kepesertaan);

        try{
            $terlaksana = $terjadwalkan->update(['terlaksana' => 1]);
            // hapus status jadwal di PErsonJadwl
            session()->flash('success','Pelaksanaan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Pelaksanaan Gagal');
        }

        return redirect()->route('home');
    }

    public static function jadwalUlang($id){
        $terjadwalkan = Terjadwalkan::where('id', $id);

        $find_id_kepesertaan = $terjadwalkan->first();
        $jadwal_semula = PersonJadwal::removeTerjadwalkan($find_id_kepesertaan);

        try{
            $terlaksana = $terjadwalkan->update(['terlaksana' => 0]);
            // session()->flash('success','Pilih Jadwal Berhasil');
        } catch (\Exception $e) {
            // session()->flash('danger','Pilih Jadwal Gagal');
        }

        return redirect()->route('admin.perancangan.setup', ['generated_id' => $find_id_kepesertaan->generated_id]);
    }

    public static function generateUniqueCode(){
        $generated_id = Str::random(25);

        $check_uniq_exist = JadwalPengganti::where('generated_id', $generated_id)->first();
        while ($check_uniq_exist) {
            self::generateUniqueCode();
        }

        return $generated_id;
    }
}
