<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/admin-login', function () {
    return view('admin-login');
});
Route::get('/admin-signup', function () {
    return view('admin-signup');
});
Route::get('/admin-index', function () {
    return view('admin-index');
});
Route::get('/admin-stock', function () {
    return view('admin-stock');
});
Route::get('/admin-daftar', function () {
    return view('admin-daftar');
});
