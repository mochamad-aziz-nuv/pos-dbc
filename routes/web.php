<?php

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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => '/produk', 'as' => 'produk.'], function () {
   Route::get('/halamanProduk', [App\Http\Controllers\ProdukController::class, 'index'])->name('halamanproduk');
   Route::get('/tambahProduk', [App\Http\Controllers\ProdukController::class, 'tambahBarang'])->name('tambahproduk');
   Route::post('/simpanProduk', [App\Http\Controllers\ProdukController::class, 'simpanBarang'])->name('simpanbrg');
   Route::get('/loadEditProduk/{produk_id}', [App\Http\Controllers\ProdukController::class, 'loadEditBarang'])->name('loadEditbarang');
   Route::post('/simpanEditProduk', [App\Http\Controllers\ProdukController::class, 'editBarang'])->name('simpanEditbarang');
   Route::get('/hapusProduk', [App\Http\Controllers\ProdukController::class, 'hapusBarang'])->name('hapusbarang');
});

Route::group(['prefix' => '/transaksi', 'as' => 'transaksi.'], function () {
    Route::get('/tambahTransaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('tambahTransaksi');
    Route::post('/simpanTransaksi', [App\Http\Controllers\TransaksiController::class, 'tambahTransaksi'])->name('simpantransaksi');
    Route::get('/listBarang', [App\Http\Controllers\TransaksiController::class, 'listBarang'])->name('produkList');
    Route::get('/cetakTransaksi', [App\Http\Controllers\TransaksiController::class, 'cetakTransaksi'])->name('buktiTransaksi');
});
