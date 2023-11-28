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

// Route untuk menampilkan daftar barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// Route untuk menampilkan form tambah barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Route untuk menyimpan barang baru
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');

// Route untuk menampilkan detail barang
Route::get('/barang/show/{id}', [BarangController::class, 'show'])->name('barang.show');

// Route untuk menampilkan form edit barang
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');

// Route untuk memperbarui barang
Route::put('/barang/{id}', 'BarangController@update')->name('barang.update');

// Route untuk menghapus barang
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');


Route::get('/', function () {
    return view('welcome');
});
