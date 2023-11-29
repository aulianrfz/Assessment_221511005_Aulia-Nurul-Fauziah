<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\NotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('tampilanawal');
})->name('home');

// BARANG

Route::get('/tambahbarang', [BarangController::class, 'tambahbarang'])->name('tambahbarang');
Route::post('/insertdatabarang', [BarangController::class, 'insertdatabarang'])->name('insertdatabarang');

Route::put('/updatedatabarang/{id}',[BarangController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::get('/tampilbarang/{id}',[BarangController::class, 'tampilbarang'])->name('tampilbarang');

Route::get('/deletebarang/{id}',[BarangController::class, 'delete'])->name('delete');

Route::get('/tampilanawal', function () {
    return view('tampilanawal');
});

// KASIR

Route::get('/tambahkasir', [KasirController::class, 'tambahkasir'])->name('tambahkasir');
Route::post('/insertdatakasir', [KasirController::class, 'insertdatakasir'])->name('insertdatakasir');

// TENAN

Route::get('/tambahtenan', [TenanController::class, 'tambahtenan'])->name('tambahtenan');
Route::post('/insertdatatenan', [TenanController::class, 'insertdatatenan'])->name('insertdatatenan');

// NOTA

Route::get('/tambahnota', [NotaController::class, 'tambahnota'])->name('tambahnota');
Route::post('/insertdatanota', [NotaController::class, 'insertdatanota'])->name('insertdatanota');


