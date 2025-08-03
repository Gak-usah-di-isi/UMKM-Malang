<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProduct;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/product-detail', [DetailProduct::class, 'index'])->name('product.detail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
