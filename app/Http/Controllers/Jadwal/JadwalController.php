<?php

namespace App\Http\Controllers\Jadwal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonJadwal;

use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public static function store(Request $request){
        DB::beginTransaction();
        try{
            $insert_jadwal = PersonJadwal::insertJadwal($request);
            DB::commit();
            session()->flash('success','Penambahan Berhasil');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger','Penambahan Gagal');
        }

        if($request->status_person_id == 1){
            return redirect()->route('admin.dosen.detail', ['person' => $request->person_id]);
        }

        if($request->status_person_id == 2){
            return redirect()->route('admin.mahasiswa.detail', ['person' => $request->person_id]);
        }

        return redirect()->route('home');

    }
}
