<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonJadwal;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $persons = Person::where('status_person_id', 2);

        if($request->search) {
            $persons->where(function($query) use ($request) {
                $query->where('name', 'like', '%'.$request->search.'%');
            });
        }

        $persons = $persons
            ->orderBy('name', 'asc')
            ->paginate($request->perPage ? $request->perPage : 10);

        return view('admin.mahasiswa.index')
            ->with('persons', $persons);
    }

    public function detail(Person $person){
        $cek_jadwal = PersonJadwal::where('person_id', $person->id)
            ->get();

        if(count($cek_jadwal) == 0){
            $jadwal = null;
        } else {
            $jadwal_raw = PersonJadwal::select('id', 'status', 'hari_jam', 'desk_kegiatan', 'status_kepesertaan_id', 'status_ujian_id', 'dinas')
                ->with('statusKepesertaan')
                ->where('person_id', $person->id)->get();

            $jadwal_key = $jadwal_raw->pluck('hari_jam');

            $jadwal = [];
            foreach($jadwal_key as $key=>$value){
                $jadwal[$value] = $jadwal_raw[$key];
            }
        }
        return view('admin.mahasiswa.detail')
            ->with('person', $person)
            ->with('jadwal', $jadwal);
    }

    public function create(){
        return view('admin.mahasiswa.create');
    }

    public function store(Request $request){
        $request->merge([
            'status_person_id' => 2
        ]);

        $validator = Validator::make($request->all(), [
            'status_person_id' => 'required',
            'uniq_id' => 'required|unique:persons',
            'name' => 'required'
        ], [
            'uniq_id.unique' => 'Nomor Induk sudah terdaftar!',
        ]);


        if ($validator->fails()) {
            session()->flash('danger','Penambahan Gagal');
            return redirect()->route('admin.mahasiswa.create')->withInput($request->all())->withErrors($validator);
        }


        DB::beginTransaction();
        try {
            $person = Person::create($validator->validated());
            DB::commit();
            session()->flash('success','Penambahan Berhasil');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger','Penambahan Gagal');
        }

        return view('admin.mahasiswa.create');
    }

    public function edit(Person $person){

    }

    public function destroy(Person $person){

        try{
            $delete = $person->delete();
            session()->flash('success','Penghapusan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penghapusan Gagal');
        }

        return redirect()->route('admin.mahasiswa.index');
    }


}
