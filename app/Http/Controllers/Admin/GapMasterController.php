<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GapMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $gap_master = DB::table('gap_master')
            ->get();

        return view('admin.gapmaster.index')
            ->with('gap_master', $gap_master);
    }
}
