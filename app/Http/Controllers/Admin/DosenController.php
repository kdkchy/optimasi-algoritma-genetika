<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $dosen_pembimbings = DB::table('dosen_pembimbings')
            ->select(
                'dosen_pembimbings.id', 
                'dosen_pembimbings.nama', 
                'dosen_pembimbings.gender', 
                'dosen_pembimbings.pendidikan_terakhir', 
                'dosen_pembimbings.mahasiswa_lulus',
                'dosen_pembimbings.ketersediaan_waktu',
                'dosen_pembimbings.bidang_keahlian_id',
                'bidang_keahlian.kriteria',
            )
            ->join('bidang_keahlian', 'dosen_pembimbings.bidang_keahlian_id', 'bidang_keahlian.id')
            ->whereNull('dosen_pembimbings.deleted_at');
            
        $bidang_keahlians = DB::table('bidang_keahlian')
            ->whereNull('bidang_keahlian.deleted_at')
            ->get();

        if($request->search) {
            $dosen_pembimbings->where(function($query) use ($request) {
                $query->where('dosen_pembimbings.nama', 'like', '%'.$request->search.'%');
                $query->orWhere('bidang_keahlian.kriteria', 'like', '%'.$request->search.'%');
            });
        }

        $dosen_pembimbings = $dosen_pembimbings
            ->orderBy('dosen_pembimbings.nama', 'asc')
            ->paginate($request->perPage ? $request->perPage : 10);

        return view('admin.dosen.index')
            ->with('bidang_keahlians', $bidang_keahlians)
            ->with('dosen_pembimbings', $dosen_pembimbings);
    }

    public function store(Request $request){
        try{
            $query_insert_data_dosen = DB::table('dosen_pembimbings')
                ->insert([
                    'nama' => $request->nama,
                    'gender' => $request->gender,
                    'pendidikan_terakhir' => $request->pendidikan_terakhir,
                    'bidang_keahlian_id' => $request->bidang_keahlian_id,
                    'mahasiswa_lulus' => $request->mahasiswa_lulus,
                    'ketersediaan_waktu' => $request->ketersediaan_waktu,
                    'created_at' => now()
                ]);
            session()->flash('success','Penambahan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penambahan Gagal');
        }
        
        return redirect()->route('admin.dosen.index');
    }

    public function update(Request $request){
        try{
            $query_update_data_dosen = DB::table('dosen_pembimbings')
                ->where('id', $request->dosen_id)
                ->update([
                    'nama' => $request->nama,
                    'gender' => $request->gender,
                    'pendidikan_terakhir' => $request->pendidikan_terakhir,
                    'bidang_keahlian_id' => $request->bidang_keahlian_id,
                    'mahasiswa_lulus' => $request->mahasiswa_lulus,
                    'ketersediaan_waktu' => $request->ketersediaan_waktu,
                    'updated_at' => now()
                ]);
            session()->flash('success','Perubahan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Perubahan Gagal');
        }
        
        return redirect()->route('admin.dosen.index');
    }

    public function destroy(Request $request){
        try{
            $query_delete_data_dosen = DB::table('dosen_pembimbings')
                ->where('id', $request->dosen_id)
                ->update([
                    'deleted_at' => now()
                ]);
            session()->flash('success','Penghapusan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penghapusan Gagal');
        }
        
        return redirect()->route('admin.dosen.index');
    }
}
