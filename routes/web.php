<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AdminController;

# User Interface
Route::get('/', function () { return view('index'); });
Route::get('/produk', [ProdukController::class, 'showProduk'])->name('produk.list');
Route::get('/keranjang', function () { return view('keranjang'); });

# Admin Interface
Route::get('/admin-login', [AdminController::class, 'login'])->name('login');
Route::post('/admin-login', [AdminController::class, 'actionlogin'])->name('actionlogin');
Route::post('/admin-logout', [AdminController::class, 'actionlogout'])->name('actionlogout')->middleware('auth:admin');
Route::get('/admin-signup', function () { return view('admin-signup'); })->name('admin.signup');
Route::post('/admin-signup', [AdminController::class, 'signup'])->name('admin.signup.post');

# Admin Routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin-index', [ProdukController::class, 'index'])->name('admin-index');
    Route::get('/admin-stock', function () { return view('admin-stock'); })->name('admin-stock');
    
    // Rute untuk menyimpan produk
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    
    // Rute untuk menghapus produk
    Route::delete('/produk/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
});
