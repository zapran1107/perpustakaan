<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\pengembalianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaftarBukuController;

use App\Http\Middleware\IsAdmin;


// use App\Models\DaftarBuku;

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
    return view('layouts.backend');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('home', [DashboardController::class, 'index'])->name('home');
    Route::resource('kategori', kategoriController::class);
    Route::resource('penulis', PenulisController::class);
    Route::resource('penerbit', PenerbitController::class);
    Route::resource('buku', BukuController::class);
    Route::resource('user', UserController::class);

    Route::get('peminjaman', [PeminjamanController::class,'indexadmin'])->name('peminjamanadmin.admin');
    Route::get('peminjaman/{id}/detail', [PeminjamanController::class,'show'])->name('peminjamanadmin.detail');
});

Route::get('', [PerpustakaanController::class, 'index'])->name('halamanuser');

Route::group(['prefix' => 'user'], function () {
    Route::get('buku', [PerpustakaanController::class, 'buku'])->name('buku');
    Route::get('show/{id}', [PerpustakaanController::class, 'show']);
    Route::get('profile', [PerpustakaanController::class, 'profile'])->name('profile');
    Route::get('dashboarduser', [PerpustakaanController::class, 'dashboard'])->name('dashboarduser');
    // Route::get('peminjaman/history', [PeminjamanController::class, 'history'])->name('peminjaman.story');
    Route::get('daftarbuku', [DaftarBukuController::class, 'index'])->name('daftarbuku.index');
});

Route::group(['prefix' => 'user','middleware' =>['auth']], function () {
    Route::resource('peminjaman', PeminjamanController::class);
    // Route::resource('pengembalian', pengembalianController::class);
});



Auth::routes();
