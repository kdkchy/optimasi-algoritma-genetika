<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terjadwalkan;

class WelcomeController extends Controller
{
    public function index(){
        $skripsi = Terjadwalkan::where('status_ujian_id', 1)
                ->whereNull('terlaksana')
                ->orderBy('tanggal')
                ->get();
        $pra_skripsi = Terjadwalkan::where('status_ujian_id', 2)
                ->whereNull('terlaksana')
                ->orderBy('tanggal')
                ->get();
            return view('welcome')
                ->with('skripsi', $skripsi)
                ->with('pra_skripsi', $pra_skripsi);
    }
}
