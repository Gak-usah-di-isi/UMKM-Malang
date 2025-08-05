<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProduct;
use App\Http\Controllers\RegisteredUmkmController;

Route::get('/', function () {
    return view('landingPage.index');
});

Route::get('/about', function () {
    return view('landingPage.about');
});

Route::get('/products', function () {
    return view('landingPage.products');
});

Route::get('/categories', function () {
    return view('landingPage.categories');
});

Route::get('/umkm-list', function () {
    return view('landingPage.umkm-list');
});

Route::get('/articles', function () {
    return view('landingPage.articles');
});

Route::get('/detail-article', function () {
    return view('landingPage.detail-article');
});

Route::get('/umkm-list', function () {
    return view('landingPage.umkm-list');
});

Route::get('/detail-umkm', function () {
    return view('landingPage.detail-umkm');
});

Route::get('/contact', function () {
    return view('landingPage.contact');
});

Route::get('/product-detail', function () {
    return view('landingPage.productDetail');
});

Route::get('/daftar-umkm', function () {
    return view('umkmRegistration.daftar-umkm');
});

Route::get('/verifikasi-umkm', function () {
    return view('umkmRegistration.verifikasi');
});


Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/pengajuan-umkm', [RegisteredUmkmController::class, 'create'])->name('pengajuan-umkm.create');
    Route::post('/pengajuan-umkm', [RegisteredUmkmController::class, 'store'])->name('pengajuan-umkm.store');
    Route::get('/verifikasi-umkm', [RegisteredUmkmController::class, 'index'])->name('verifikasi-umkm');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
