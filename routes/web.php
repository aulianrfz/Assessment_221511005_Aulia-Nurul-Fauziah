<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/tambahbarang', [BarangController::class, 'tambahbarang'])->name('tambahbarang');
Route::post('/insertdatabarang', [BarangController::class, 'insertdatabarang'])->name('insertdatabarang');

Route::put('/updatedatabarang/{id}',[BarangController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::get('/tampilbarang/{id}',[BarangController::class, 'tampilbarang'])->name('tampilbarang');

Route::get('/deletebarang/{id}',[BarangController::class, 'delete'])->name('delete');

Route::get('/tampilanawal', function () {
    return view('tampilanawal');
});


