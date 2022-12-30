<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Classes\PemetaanGap;
use App\Classes\NilaiCoreFactor;
use App\Classes\NilaiSecondaryFactor;
use App\Classes\NilaiTotal;
use App\Classes\NilaiRanking;

class PencarianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->PemetaanGap = new PemetaanGap();
        $this->NilaiCoreFactor = new NilaiCoreFactor();
        $this->NilaiSecondaryFactor = new NilaiSecondaryFactor();
        $this->NilaiTotal = new NilaiTotal();
        $this->NilaiRanking = new NilaiRanking();
    }

    public function index(){
        $bidang_keahlians = DB::table('bidang_keahlian')
            ->whereNull('bidang_keahlian.deleted_at')
            ->get();

        return view('mahasiswa.pencarian.index')
            ->with('bidang_keahlians', $bidang_keahlians);
    }

    public function hasilpencarian(Request $request){
        // dd($request->all());

        // mencari bidang keahlian sesuai yg dipilih oleh mahasiswa
        // hasil 1
        $bidang_keahlian = DB::table('bidang_keahlian')
            ->where('id', $request->bidang_keahlian_id)
            ->first();

        // mengambil semua data dosen yang deleted_at nya NULL
        $dosens = DB::table('dosen_pembimbings')
            ->whereNull('dosen_pembimbings.deleted_at')
            ->orderBy('nama', 'asc')
            ->get();

        // mengambil data ideal dari dtabase
        $ideal = DB::table('ideal_master')
            ->first();

        // mengambil data gap master
        $gap = DB::table('gap_master')
            ->orderBy('selisih')
            ->get();

        $gap_selisih = [];
        $gap_bobot = [];

        // sebuah perulangan untuk array
        foreach($gap as $g){
            array_push($gap_selisih, $g->selisih);
            array_push($gap_bobot, $g->bobot_nilai);
        }

        //pemetaan gap
        $aspek_akademik = $this->PemetaanGap->akademik($request, $dosens, $ideal, $gap_selisih, $gap_bobot);
        $aspek_non_akademik = $this->PemetaanGap->nonAkademik($request, $dosens, $ideal, $gap_selisih, $gap_bobot);
        // dd($aspek_akademik);

        //core factor
        $nilai_core_factor_akademik = $this->NilaiCoreFactor->akademik($aspek_akademik);
        $nilai_core_factor_non_akademik = $this->NilaiCoreFactor->nonAkademik($aspek_non_akademik);

        //secondary factor
        $nilai_secondary_factor_akademik = $this->NilaiSecondaryFactor->akademik($aspek_akademik);
        $nilai_secondary_factor_non_akademik = $this->NilaiSecondaryFactor->nonAkademik($aspek_non_akademik);

        //nilai total
        $nilai_total_akademik = $this->NilaiTotal->akademik($nilai_core_factor_akademik, $nilai_secondary_factor_akademik);
        $nilai_total_non_akademik = $this->NilaiTotal->nonAkademik($nilai_core_factor_non_akademik, $nilai_secondary_factor_non_akademik);

        $nilai_ranking = $this->NilaiRanking->ranking($nilai_total_akademik, $nilai_total_non_akademik);
        $nilai_ranking_uo = $this->NilaiRanking->rankingUO($nilai_total_akademik, $nilai_total_non_akademik);
        // $nilai_ranking = $this->NilaiRanking->ranking();

        //penambahan key unuk keperluan history
        // $aspek_akademik = maping_array($aspek_akademik, 'dosen_id');
        // $aspek_non_akademik = maping_array($aspek_non_akademik, 'dosen_id');

        // $nilai_core_factor_akademik = maping_array($nilai_core_factor_akademik, 'dosen_id');
        // $nilai_core_factor_non_akademik = maping_array($nilai_core_factor_non_akademik, 'dosen_id');

        // $nilai_secondary_factor_akademik = maping_array($nilai_secondary_factor_akademik, 'dosen_id');
        // $nilai_secondary_factor_non_akademik = maping_array($nilai_secondary_factor_non_akademik, 'dosen_id');

        $nilai_total_akademik = maping_array($nilai_total_akademik, 'dosen_id');
        $nilai_total_non_akademik = maping_array($nilai_total_non_akademik, 'dosen_id');

        $nilai_ranking = maping_array($nilai_ranking, 'dosen_id');

        // dd($nilai_ranking[10]);


        return view('mahasiswa.pencarian.hasilpencarian')
            ->with('bidang_keahlian', $bidang_keahlian)
            ->with('gender', $request->gender)

            ->with('ketersediaan_waktu', $request->ketersediaan_waktu)
            ->with('pendidikan_terakhir', $request->pendidikan_terakhir)

            ->with('aspek_akademik', $aspek_akademik)
            ->with('aspek_non_akademik', $aspek_non_akademik)

            ->with('nilai_core_factor_akademik', $nilai_core_factor_akademik)
            ->with('nilai_core_factor_non_akademik', $nilai_core_factor_non_akademik)

            ->with('nilai_secondary_factor_akademik', $nilai_secondary_factor_akademik)
            ->with('nilai_secondary_factor_non_akademik', $nilai_secondary_factor_non_akademik)

            ->with('nilai_total_akademik', $nilai_total_akademik)
            ->with('nilai_total_non_akademik', $nilai_total_non_akademik)

            ->with('nilai_ranking', $nilai_ranking)
            ->with('nilai_ranking_uo', $nilai_ranking_uo);
    }

    public function store(Request $request){
        try{
            $query_insert_data_dosen = DB::table('hasil_perhitungan')
                ->insert([
                    'user_id' => Auth::id(),
                    'dosen_pembimbing_id' => $request->dosen_id,
                    'gender' => $request->gender,
                    'pendidikan_terakhir' => $request->pendidikan_terakhir,
                    'bidang_keahlian' => $request->bidang_keahlian,
                    'ketersediaan_waktu' => $request->ketersediaan_waktu,

                    'akademik_ncf' => $request->akademik_ncf,
                    'akademik_nsf' => $request->akademik_nsf,
                    'non_akademik_ncf' => $request->non_akademik_ncf,
                    'non_akademik_nsf' => $request->non_akademik_nsf,
                    'n1' => $request->n_satu,
                    'n2' => $request->n_dua,
                    'rank' => $request->rank,
                    'created_at' => now()
                ]);
            session()->flash('success','Penyimpanan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penyimpanan Gagal');
        }

        return redirect()->route('mahasiswa.pencarian.historypencarian');
    }

    public function historypencarian(Request $request){
        $history = DB::table('hasil_perhitungan')
            ->select('hasil_perhitungan.*', 'dosen_pembimbings.nama')
            ->join('dosen_pembimbings', 'hasil_perhitungan.dosen_pembimbing_id', 'dosen_pembimbings.id');

        if($request->search) {
            $history->where(function($query) use ($request) {
                $query->where('dosen_pembimbings.nama', 'like', '%'.$request->search.'%');
                $query->orWhere('hasil_perhitungan.bidang_keahlian', 'like', '%'.$request->search.'%');
            });
        }
        $history = $history
            ->orderBy('dosen_pembimbings.nama', 'asc')
            ->where('user_id', Auth::id())->paginate(10);

        return view('mahasiswa.pencarian.historypencarian')->with('history', $history);
    }

    public function destroy(Request $request){
        try{
            $query_delete_data_dosen = DB::table('hasil_perhitungan')
                ->delete($request->dosen_id);
            session()->flash('success','Penghapusan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penghapusan Gagal');
        }

        return redirect()->route('mahasiswa.pencarian.historypencarian');
    }

}
