<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IdealMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $ideal_master = DB::table('ideal_master')
            ->first();

        return view('admin.idealmaster.index')
            ->with('ideal_master', $ideal_master);
    }
}
