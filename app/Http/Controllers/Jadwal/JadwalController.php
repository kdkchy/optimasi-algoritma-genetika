<?php

namespace App\Http\Controllers\Jadwal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonJadwal;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

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

    public static function update(Request $request){

        if(!$request->status){
            $request->merge([
                'status' => 0,
                'desk_kegiatan' => null
            ]);
        }

        if(!$request->dinas){
            $request->merge([
                'dinas' => 0
            ]);
        }

        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'desk_kegiatan' => 'required_if:status,1',
            'dinas' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('danger','Perubahan Jadwal Harian Gagal');
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try{
            $update_jadwal = PersonJadwal::where('id', $request->id)
                ->update([
                    'status' => $request->status,
                    'desk_kegiatan' => $request->desk_kegiatan,
                    'dinas' => $request->dinas
                ]);
            DB::commit();
            session()->flash('success','Perubahan Jadwal Berhasil');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger','Perubahan Jadwal Gagal');
        }


        return redirect()->back();
    }


}
