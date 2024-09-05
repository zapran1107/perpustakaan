<?php
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Dashboard;
use Illuminate\Support\Facades\Route;

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

// Route::get('/user', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('penulis', PenulisController::class);
Route::resource('buku', BukuController::class);
Route::resource('penerbit', PenerbitController::class);
Route::resource('kategori', kategoriController::class);
Route::resource('dashboard', HomeController::class);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('user',[FrontendController::class, 'index']);
