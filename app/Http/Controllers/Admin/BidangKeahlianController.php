<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidangKeahlianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $bidang_keahlians = DB::table('bidang_keahlian')
            ->whereNull('bidang_keahlian.deleted_at')
            ->get();

        return view('admin.bidangkeahlian.index')
            ->with('bidang_keahlians', $bidang_keahlians);
    }

    public function store(Request $request){
        try{
            $query_insert_data_bidang = DB::table('bidang_keahlian')
                ->insert([
                    'kriteria' => $request->kriteria,
                    'created_at' => now()
                ]);
            session()->flash('success','Penambahan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penambahan Gagal');
        }
        
        return redirect()->route('admin.bidang-keahlian.index');
    }

    public function update(Request $request){
        try{
            $query_update_data_bidang = DB::table('bidang_keahlian')
                ->where('id', $request->kriteria_id)
                ->update([
                    'kriteria' => $request->kriteria,
                    'updated_at' => now()
                ]);
            session()->flash('success','Perubahan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Perubahan Gagal');
        }
        
        return redirect()->route('admin.bidang-keahlian.index');
    }

    public function destroy(Request $request){
        try{
            $query_delete_data_bidang = DB::table('bidang_keahlian')
                ->where('id', $request->kriteria_id)
                ->update([
                    'deleted_at' => now()
                ]);
            session()->flash('success','Penghapusan Berhasil');
        } catch (\Exception $e) {
            session()->flash('danger','Penghapusan Gagal');
        }
        
        return redirect()->route('admin.bidang-keahlian.index');
    }
}
