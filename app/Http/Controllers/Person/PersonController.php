<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonJadwal;
use Illuminate\Support\Facades\Validator;

use App\Http\Traits\PersonTrait;

use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    use PersonTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $persons = self::personList($request, 2);

        return view('admin.mahasiswa.index')
            ->with('persons', $persons);
    }

    public function show(Person $person){
        $mahasiswa = $this->personDetail($person);

        return view('admin.mahasiswa.detail')
            ->with('person', $mahasiswa->person)
            ->with('jadwal', $mahasiswa->jadwal);
    }

    public function create(){
        return view('admin.mahasiswa.create');
    }

    public function store(Request $request){
        $request->merge([
            'status_person_id' => 2
        ]);

        $storeMahasiswa = $this->personStore($person, $request->status_person_id);
        if($storeMahasiswa->validator->fails()) {
            session()->flash('danger','Penambahan Gagal');
            return redirect()->route('admin.person.mahasiswa.create')->withInput($request->all())->withErrors($storeMahasiswa->validator);
        }

        // if($storeMahasiswa->e)

        // return view('admin.mahasiswa.create');
    }

    ////////

    //mahasiswa
    public function mahasiswa(Request $request){
        $list_mahasiswa = self::index($request, 2);

        return view('admin.mahasiswa.index')
            ->with('list_mahasiswa', $list_mahasiswa);
    }
    public function mahasiswaDetail(Person $person){
        $cek_jadwal = PersonJadwal::where('person_id', $person->id)
            ->get();

        if(count($cek_jadwal) == 0){
            return view('admin.mahasiswa.detail')
                ->with('person', $person)
                ->with('jadwal_tanpa_desk', true);
        }

        $jadwal_raw = PersonJadwal::select('status', 'hari_jam', 'desk_kegiatan', 'status_kepesertaan_id', 'status_ujian_id')
            ->with('statusKepesertaan')
            ->where('person_id', $person->id)->get();

        $jadwal_key = $jadwal_raw->pluck('hari_jam');

        $jadwal = [];
        foreach($jadwal_key as $key=>$value){
            $jadwal[$value] = $jadwal_raw[$key];
        }

        return view('admin.mahasiswa.detail')
            ->with('person', $person)
            ->with('jadwal', $jadwal);
    }

    public function mahasiswaStore(Request $request){
        $request->merge([
            'status_person_id' => 2
        ]);
        return self::store($request, 2);
        // return view('admin.mahasiswa.create');
    }

    //dosen
    public function dosen(){

    }

    //main
    // public function index($request, $status_person_id){
    //     $persons = DB::table('persons')->where('status_person_id', $status_person_id);

    //     if($request->search) {
    //         $persons->where(function($query) use ($request) {
    //             $query->where('name', 'like', '%'.$request->search.'%');
    //         });
    //     }

    //     $persons = $persons
    //         ->orderBy('name', 'asc')
    //         ->paginate($request->perPage ? $request->perPage : 10);

    //     return $persons;
    // }

    // public function store($request, $status_person){
    //     $validator = Validator::make($request->all(), [
    //         'status_person_id' => 'required',
    //         'uniq_id' => 'required|unique:persons',
    //         'name' => 'required'
    //     ], [
    //         'uniq_id.unique' => 'Nomor Induk sudah terdaftar!',
    //     ]);


    //     if ($validator->fails()) {
    //         session()->flash('danger','Penambahan Gagal');
    //         // return redirect()->route('admin.person.mahasiswa.index');

    //         // if($status_person == 1){
    //         //     return redirect()->route('admin.person.dosen.create')->withInput($request->all())->withErrors($validator);
    //         // }

    //         if($status_person == 2){
    //             return redirect()->route('admin.person.mahasiswa.create')->withInput($request->all())->withErrors($validator);
    //         }

    //     }


    //     DB::beginTransaction();
    //     try {
    //         $person = Person::create($validator->validated());
    //         DB::commit();
    //         session()->flash('success','Penambahan Berhasil');
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         session()->flash('danger','Penambahan Gagal');
    //     }

    //     // if($status_person == 1){
    //     //     return redirect()->route('admin.person.mahasiswa.index');
    //     // }

    //     if($status_person == 2){
    //         return redirect()->route('admin.person.mahasiswa.index');
    //     }
    // }

    public function update(){

    }

    public function destroy(){

    }
}
