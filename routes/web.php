<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

#User Interface
Route::get('/', function () {
    return view('index');
});
Route::get('/produk', [ProdukController::class, 'showProduk'])->name('produk.list');
Route::get('/keranjang', function () {
    return view('keranjang');
});
#User Interface

#Admin Interface
Route::get('/admin-login', function () {
    return view('admin-login');
});
Route::get('/admin-signup', function () {
    return view('admin-signup');
});
Route::get('/admin-stock', function () {
    return view('admin-stock');
})->name('admin-stock'); // Menambahkan nama rute
Route::get('/admin-daftar', function () {
    return view('admin-daftar');
});
#Admin Interface

#Controller Routes
Route::get('/admin-index', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::delete('/produk/delete/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
