<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DosbingController extends Controller
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

        if($request->nama == 'asc') {
                $dosen_pembimbings = $dosen_pembimbings->orderBy('dosen_pembimbings.nama', 'asc');
        }

        if($request->nama == 'desc') {
                $dosen_pembimbings = $dosen_pembimbings->orderBy('dosen_pembimbings.nama', 'desc');
        }

        if($request->gender == 'asc') {
            $dosen_pembimbings = $dosen_pembimbings->orderBy('dosen_pembimbings.gender', 'asc');
        }

        if($request->gender == 'desc') {
                $dosen_pembimbings = $dosen_pembimbings->orderBy('dosen_pembimbings.gender', 'desc');
        }

        if($request->bidang_keahlian_id) {
            $dosen_pembimbings->where(function($query) use ($request) {
                $query->where('dosen_pembimbings.bidang_keahlian_id', $request->bidang_keahlian_id);
            });
        }

        $dosen_pembimbings = $dosen_pembimbings
            // ->orderBy('dosen_pembimbings.nama', 'asc')
            ->paginate($request->perPage ? $request->perPage : 10);

        return view('mahasiswa.dosbing.index')
            ->with('bidang_keahlians', $bidang_keahlians)
            ->with('dosen_pembimbings', $dosen_pembimbings);
    }
}
