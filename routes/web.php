<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AkunController;
use App\Http\Controllers\Person\PersonController;
use App\Http\Controllers\Jadwal\JadwalController;

use App\Http\Controllers\Ruangan\RuanganController;
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

// Route::get('/', function () {
//     return view('welcome');
    // return redirect()->route('login');
// })->name('welcome');

Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::view('/about', 'tentang.public')->name('about');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:1,2'])->prefix('/admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::prefix('/jadwal')->namespace('Jadwal')->name('jadwal.')->group(function () {
        Route::post('/store', [JadwalController::class, 'store'])->name('store');
        Route::post('/update', [JadwalController::class, 'update'])->name('update');
    });

    Route::prefix('/ruangan')->namespace('Ruangan')->name('ruangan.')->group(function () {
        Route::get('/', [RuanganController::class, 'index'])->name('index');
    });

    Route::prefix('/mahasiswa')->namespace('Mahasiswa')->name('mahasiswa.')->group(function () {
        Route::get('/', [MahasiswaController::class, 'index'])->name('index');
        Route::get('/{person}/detail', [MahasiswaController::class, 'detail'])->name('detail');

        Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
        Route::post('/store', [MahasiswaController::class, 'store'])->name('store');

        Route::get('/edit/{person}', [MahasiswaController::class, 'edit'])->name('edit');
        Route::post('/update/{person}', [MahasiswaController::class, 'update'])->name('update');
        Route::delete('/destroy/{person}', [MahasiswaController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/dosen')->namespace('Dosen')->name('dosen.')->group(function () {
        Route::get('/', [DosenController::class, 'index'])->name('index');
        Route::get('/{person}/detail', [DosenController::class, 'detail'])->name('detail');

        Route::get('/create', [DosenController::class, 'create'])->name('create');
        Route::post('/store', [DosenController::class, 'store'])->name('store');

        Route::get('/edit/{person}', [DosenController::class, 'edit'])->name('edit');
        Route::post('/update/{person}', [DosenController::class, 'update'])->name('update');
        Route::delete('/destroy/{person}', [DosenController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/perancangan')->namespace('Perancangan')->name('perancangan.')->group(function() {
        Route::get('/', [PerancanganController::class, 'index'])->name('index');
        Route::post('/rancang', [PerancanganController::class, 'rancang'])->name('rancang');

        Route::get('/setup', [PerancanganController::class, 'setupJadwal'])->name('setup');
        Route::post('/store', [PerancanganController::class, 'store'])->name('store');

        Route::delete('/destroy/{id}', [PerancanganController::class, 'destroy'])->name('destroy');
        Route::post('/terlaksana/{id}', [PerancanganController::class, 'terlaksana'])->name('terlaksana');
        Route::post('/jadwal-ulang/{id}', [PerancanganController::class, 'jadwalUlang'])->name('jadwalUlang');
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

Route::middleware(['auth', 'role:1,2,3'])->group(function () {

    Route::prefix('/bantuan')->namespace('Bantuan')->name('bantuan.')->group(function () {
        Route::view('/index', 'bantuan.index')->name('index');
    });

});

Route::middleware(['auth', 'role:1,2,3'])->group(function () {

    Route::prefix('/tentang')->namespace('Bantuan')->name('tentang.')->group(function () {
        Route::view('/index', 'tentang.index')->name('index');
    });

});
