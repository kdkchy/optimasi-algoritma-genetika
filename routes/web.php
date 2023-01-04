<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AkunController;
use App\Http\Controllers\Person\PersonController;
use App\Http\Controllers\Jadwal\JadwalController;

use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;

use App\Http\Controllers\Perancangan\PerancanganController;

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

    Route::prefix('/jadwal')->namespace('Jadwal')->name('jadwal.')->group(function () {
        Route::post('/store', [JadwalController::class, 'store'])->name('store');
        Route::post('/store/{id}', [JadwalController::class, 'storeById'])->name('storeById');

    });

    Route::prefix('/mahasiswa')->namespace('Mahasiswa')->name('mahasiswa.')->group(function () {
        Route::get('/', [MahasiswaController::class, 'index'])->name('index');
        Route::get('/{person}/detail', [MahasiswaController::class, 'detail'])->name('detail');

        Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
        Route::post('/store', [MahasiswaController::class, 'store'])->name('store');

        Route::get('/edit/{person}', [MahasiswaController::class, 'edit'])->name('edit');
        Route::post('/update/{person}', [MahasiswaController::class, 'update'])->name('update');
        Route::delete('/delete/{person}', [MahasiswaController::class, 'delete'])->name('delete');
    });

    Route::prefix('/dosen')->namespace('Dosen')->name('dosen.')->group(function () {
        Route::get('/', [DosenController::class, 'index'])->name('index');
        Route::get('/{person}/detail', [DosenController::class, 'detail'])->name('detail');

        Route::get('/create', [DosenController::class, 'create'])->name('create');
        Route::post('/store', [DosenController::class, 'store'])->name('store');

        Route::get('/edit/{person}', [DosenController::class, 'edit'])->name('edit');
        Route::post('/update/{person}', [DosenController::class, 'update'])->name('update');
        Route::delete('/delete/{person}', [DosenController::class, 'delete'])->name('delete');
    });

    Route::prefix('/perancangan')->namespace('Perancangan')->name('perancangan.')->group(function() {
        Route::get('/', [PerancanganController::class, 'index'])->name('index');
        Route::post('/rancang', [PerancanganController::class, 'rancang'])->name('rancang');

        Route::get('/setup', [PerancanganController::class, 'setupJadwal'])->name('setup');
        Route::post('/store', [PerancanganController::class, 'store'])->name('store');
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
