<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Terjadwalkan;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $skripsi = Terjadwalkan::where('status_ujian_id', 1)
            ->whereNull('terlaksana')
            ->orderBy('tanggal')
            ->get();
        $pra_skripsi = Terjadwalkan::where('status_ujian_id', 2)
            ->whereNull('terlaksana')
            ->orderBy('tanggal')
            ->get();
        return view('home')
            ->with('skripsi', $skripsi)
            ->with('pra_skripsi', $pra_skripsi);
    }
}
