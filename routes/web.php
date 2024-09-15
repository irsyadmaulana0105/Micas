<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (env('APP_UNDER_CONSTRUCTION', false)) {
        return view('cover'); // Menampilkan halaman sementara
    }
    return view('home'); // Menampilkan halaman utama
})->name('home');

Route::get('/about', function () {
    return view('about'); // Mengarahkan '/about' ke view 'about'
})->name('about');

Route::get('/pages/cart', function () {
    return view('pages.cart'); // Mengarahkan '/cart' ke view 'cart'
})->name('cart');

Route::get('/pages/login', function () {
    return view('pages.login'); // Mengarahkan '/cart' ke view 'cart'
})->name('login');
Route::get('/pages/create', function () {
    return view('pages.create'); // Mengarahkan '/cart' ke view 'cart'
})->name('create');

Route::get('/pages/overview', function () {
    return view('pages.overview'); // Mengarahkan '/pages/overview' ke view 'pages/overview.blade.php'
})->name('overview');


use App\Http\Controllers\KaosController;

Route::get('/kaos/ubah-size/{id}/{size_baru}', [KaosController::class, 'ubahSizeKaos']);
