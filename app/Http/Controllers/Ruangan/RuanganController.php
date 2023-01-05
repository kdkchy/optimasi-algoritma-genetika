<?php

namespace App\Http\Controllers\Ruangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ruangan;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
    public function index(){
        $ruangan = DB::table('ruangan')
            ->select('label', DB::raw('count(*) as total'))
            ->groupBy('label')
            ->paginate(10);

        return view('admin.ruangan.index')
            ->with('ruangan', $ruangan);
    }
}
