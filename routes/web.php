<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\BidangKeahlianController;
use App\Http\Controllers\Admin\IdealMasterController;
use App\Http\Controllers\Admin\GapMasterController;

use App\Http\Controllers\Mahasiswa\PencarianController;
use App\Http\Controllers\Mahasiswa\DosbingController;

use App\Http\Controllers\AkunController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:1,2'])->prefix('/admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::prefix('/dosen')->namespace('Dosen')->name('dosen.')->group(function () {
        Route::get('/index', [DosenController::class, 'index'])->name('index');
        Route::post('/store', [DosenController::class, 'store'])->name('store');
        Route::post('/update', [DosenController::class, 'update'])->name('update');
        Route::post('/destroy', [DosenController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/bidang-keahlian')->namespace('BidangKeahlian')->name('bidang-keahlian.')->group(function () {
        Route::get('/index', [BidangKeahlianController::class, 'index'])->name('index');
        Route::post('/store', [BidangKeahlianController::class, 'store'])->name('store');
        Route::post('/update', [BidangKeahlianController::class, 'update'])->name('update');
        Route::post('/destroy', [BidangKeahlianController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/ideal-master')->namespace('IdealMaster')->name('ideal-master.')->group(function () {
        Route::get('/index', [IdealMasterController::class, 'index'])->name('index');
        Route::post('/store', [IdealMasterController::class, 'store'])->name('store');
        Route::post('/update', [IdealMasterController::class, 'update'])->name('update');
        Route::post('/destroy', [IdealMasterController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/gap-master')->namespace('GapMaster')->name('gap-master.')->group(function () {
        Route::get('/index', [GapMasterController::class, 'index'])->name('index');
        Route::post('/store', [GapMasterController::class, 'store'])->name('store');
        Route::post('/update', [GapMasterController::class, 'update'])->name('update');
        Route::post('/destroy', [GapMasterController::class, 'destroy'])->name('destroy');
    });

});

Route::middleware(['auth', 'role:1,2,3'])->prefix('/mahasiswa')->namespace('Mahasiswa')->name('mahasiswa.')->group(function () {

    Route::prefix('/pencarian')->namespace('Pencarian')->name('pencarian.')->group(function () {
        Route::get('/index', [PencarianController::class, 'index'])->name('index');
        Route::post('/hasil-pencarian', [PencarianController::class, 'hasilpencarian'])->name('hasilpencarian');
        Route::post('/store', [PencarianController::class, 'store'])->name('store');
        Route::get('/history-pencarian', [PencarianController::class, 'historypencarian'])->name('historypencarian');
        Route::post('/destroy', [PencarianController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/dosbin')->namespace('Dosbing')->name('dosbing.')->group(function () {
        Route::get('/index', [DosbingController::class, 'index'])->name('index');
    });

});

Route::middleware(['auth', 'role:1,2,3'])->group(function () {

    Route::prefix('/akun')->namespace('Akun')->name('akun.')->group(function () {
        Route::get('/index', [AkunController::class, 'index'])->name('index');
        Route::post('/store', [AkunController::class, 'store'])->name('store');
        Route::post('/update', [AkunController::class, 'update'])->name('update');
        Route::post('/destroy', [AkunController::class, 'destroy'])->name('destroy');
    });

});
