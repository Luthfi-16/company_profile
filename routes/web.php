<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\FotofasilitasController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('/fakultas', [FrontController::class, 'Fakultas']);
Route::get('fakultas{id}', [FrontController::class, 'detailFakultas'])->name('detail_fakultas');
Route::get('/artikel', [FrontController::class, 'Artikel']);
Route::get('artikel{id}', [FrontController::class, 'detailArtikel'])->name('detail_artikel');
Route::get('/dosen', [FrontController::class, 'Dosen']);
Route::get('/fasilitas', [FrontController::class, 'Fasilitas']);
Route::get('fasilitas{id}', [FrontController::class, 'detailFasilitas'])->name('detail_fasilitas');
Route::get('/ukm', [FrontController::class, 'Ukm']);
Route::get('ukm{id}', [FrontController::class, 'detailUkm'])->name('detail_ukm');
Route::get('/prestasi', [FrontController::class, 'Prestasi']);


// Route::resource('artikel', FrontController::class);
// Route::resource('artikel{id}', FrontController::class);





Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('fotofasilitas', FotofasilitasController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('prestasi', PrestasiController::class);
    Route::resource('ukm', UkmController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('fakultas', FakultasController::class);

});

Auth::routes(['register' => false]);
