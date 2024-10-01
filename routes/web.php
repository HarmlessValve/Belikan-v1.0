<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KeranjangController;

# User Interface
Route::get('/', function () {
    return view('index');
});
Route::get('/produk', [ProdukController::class, 'showProduk'])->name('produk.list');
Route::get('/keranjang', [KeranjangController::class, 'showKeranjang'])->name('keranjang.show');
Route::post('/keranjang/bayar', [KeranjangController::class, 'bayar'])->name('keranjang.bayar');
Route::post('/keranjang/tambah', [KeranjangController::class, 'tambahKeKeranjang'])->name('keranjang.tambah');
Route::get('/keranjang/hapus/{id}', [KeranjangController::class, 'hapusDariKeranjang'])->name('keranjang.hapus');

# Admin login logout
Route::get('/admin-login', [AdminController::class, 'login'])->name('login');
Route::post('/admin-login', [AdminController::class, 'actionlogin'])->name('actionlogin');
Route::post('/admin-logout', [AdminController::class, 'actionlogout'])->name('actionlogout')->middleware('auth:admin');
Route::get('/admin-signup', function () {
    return view('admin-signup');
})->name('admin.signup');
Route::post('/admin-signup', [AdminController::class, 'signup'])->name('admin.signup.post');

# Admin Routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin-index', [ProdukController::class, 'index'])->name('admin-index');
    Route::get('/admin-stock', function () {
        return view('admin-stock');
    })->name('admin-stock');
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id_produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id_produk}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
});

