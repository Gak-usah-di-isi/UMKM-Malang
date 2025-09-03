<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProduct;
use App\Http\Controllers\RegisteredUmkmController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UmkmVerificationController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminUmkmCategoryController;
use App\Http\Controllers\Admin\AdminUmkmController;
use App\Http\Controllers\Event;
use App\Http\Controllers\Umkm\DashboardController as UmkmDashboardController;
use App\Http\Controllers\Umkm\UmkmProfileController;
use App\Http\Controllers\Umkm\UmkmGalleryController;
use App\Http\Controllers\Umkm\UmkmSocialController;
use App\Http\Controllers\Umkm\UmkmProductController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/agenda', [EventController::class, 'index'])->name('events');
Route::get('/agenda/{event:slug}', [EventController::class, 'show'])->name('events.show');

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('list-umkm', [UmkmController::class, 'index'])->name('list-umkm.index');
Route::get('list-umkm/{slug}', [UmkmController::class, 'show'])->name('list-umkm.show');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/contact', function () {
    return view('landingPage.contact');
});

Route::get('/daftar-umkm', function () {
    return view('umkmRegistration.daftar-umkm');
});

Route::get('/verifikasi-umkm', function () {
    return view('umkmRegistration.verifikasi');
});
Route::get('/detail-product', function () {
    return view('landingPage.productDetail');
});


Route::prefix('user')->middleware('auth', 'role:user')->group(function () {
    Route::get('/pengajuan-umkm', [RegisteredUmkmController::class, 'create'])->name('pengajuan-umkm.create');
    Route::post('/pengajuan-umkm', [RegisteredUmkmController::class, 'store'])->name('pengajuan-umkm.store');
    Route::get('/verifikasi-umkm', [RegisteredUmkmController::class, 'index'])->name('verifikasi-umkm');
});


Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/umkm-verification', [UmkmVerificationController::class, 'index'])->name('admin.umkm-verification.index');
    Route::get('/umkm-verification/{slug}', [UmkmVerificationController::class, 'show'])->name('admin.umkm-verification.show');
    Route::patch('/umkm-verification/{slug}/verified', [UmkmVerificationController::class, 'verified'])->name('admin.umkm-verification.verified');
    Route::patch('/umkm-verification/{slug}/rejected', [UmkmVerificationController::class, 'rejected'])->name('admin.umkm-verification.rejected');

    Route::get('/umkm', [AdminUmkmController::class, 'index'])->name('admin.umkm.index');
    Route::get('/umkm/{slug}', [AdminUmkmController::class, 'show'])->name('admin.umkm.show');
    Route::get('/umkm/{slug}/edit', [AdminUmkmController::class, 'edit'])->name('admin.umkm.edit');
    Route::put('/umkm/{slug}', [AdminUmkmController::class, 'update'])->name('admin.umkm.update');
    Route::delete('/umkm/{slug}', [AdminUmkmController::class, 'destroy'])->name('admin.umkm.destroy');

    Route::get('/articles', [AdminArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/articles/create', [AdminArticleController::class, 'create'])->name('admin.articles.create');
    Route::post('/articles', [AdminArticleController::class, 'store'])->name('admin.articles.store');
    Route::get('/articles/{slug}', [AdminArticleController::class, 'show'])->name('admin.articles.show');
    Route::get('/articles/{slug}/edit', [AdminArticleController::class, 'edit'])->name('admin.articles.edit');
    Route::put('/articles/{slug}', [AdminArticleController::class, 'update'])->name('admin.articles.update');
    Route::delete('/articles/{slug}', [AdminArticleController::class, 'destroy'])->name('admin.articles.destroy');

    Route::get('/umkm-categories', [AdminUmkmCategoryController::class, 'index'])->name('admin.umkm-categories.index');
    Route::get('/umkm-categories/create', [AdminUmkmCategoryController::class, 'create'])->name('admin.umkm-categories.create');
    Route::post('/umkm-categories', [AdminUmkmCategoryController::class, 'store'])->name('admin.umkm-categories.store');
    Route::get('/umkm-categories/{slug}/edit', [AdminUmkmCategoryController::class, 'edit'])->name('admin.umkm-categories.edit');
    Route::put('/umkm-categories/{slug}', [AdminUmkmCategoryController::class, 'update'])->name('admin.umkm-categories.update');
    Route::delete('/umkm-categories/{slug}', [AdminUmkmCategoryController::class, 'destroy'])->name('admin.umkm-categories.destroy');

    Route::get('/events', [AdminEventController::class, 'index'])->name('admin.events.index');
    Route::get('/events/create', [AdminEventController::class, 'create'])->name('admin.events.create');
    Route::post('/events', [AdminEventController::class, 'store'])->name('admin.events.store');
    Route::get('/events/{slug}', [AdminEventController::class, 'show'])->name('admin.events.show');
    Route::get('/events/{slug}/edit', [AdminEventController::class, 'edit'])->name('admin.events.edit');
    Route::put('/events/{slug}', [AdminEventController::class, 'update'])->name('admin.events.update');
    Route::delete('/events/{slug}', [AdminEventController::class, 'destroy'])->name('admin.events.destroy');
});


Route::prefix('umkm')->middleware(['auth', 'role:umkm'])->group(function () {
    Route::get('/dashboard', [UmkmDashboardController::class, 'index'])->name('umkm.dashboard');

    Route::get('/profil-umkm', [UmkmProfileController::class, 'edit'])->name('umkm.profile.edit');
    Route::post('/profil-umkm', [UmkmProfileController::class, 'update'])->name('umkm.profile.update');

    Route::get('/galeri-umkm', [UmkmGalleryController::class, 'index'])->name('umkm.gallery.index');
    Route::post('/galeri-umkm/upload', [UmkmGalleryController::class, 'upload'])->name('umkm.gallery.upload');
    Route::delete('/galeri-umkm/{photo}', [UmkmGalleryController::class, 'destroy'])->name('umkm.gallery.destroy');

    Route::get('/socials', [UmkmSocialController::class, 'index'])->name('umkm.socials.index');
    Route::post('/socials', [UmkmSocialController::class, 'store'])->name('umkm.socials.store');
    Route::put('/socials/{social}', [UmkmSocialController::class, 'update'])->name('umkm.socials.update');
    Route::delete('/socials/{social}', [UmkmSocialController::class, 'destroy'])->name('umkm.socials.destroy');

    Route::get('/products', [UmkmProductController::class, 'index'])->name('umkm.products.index');
    Route::get('/products/create', [UmkmProductController::class, 'create'])->name('umkm.products.create');
    Route::post('/products', [UmkmProductController::class, 'store'])->name('umkm.products.store');
    Route::get('/products/{slug}', [UmkmProductController::class, 'show'])->name('umkm.products.show');
    Route::get('/products/{slug}/edit', [UmkmProductController::class, 'edit'])->name('umkm.products.edit');
    Route::put('/products/{slug}', [UmkmProductController::class, 'update'])->name('umkm.products.update');
    Route::delete('/products/{slug}', [UmkmProductController::class, 'destroy'])->name('umkm.products.destroy');
});

Route::get('/user/umkm-saya', function () {
    $existingUmkm = \App\Models\Umkm::where('user_id', auth()->id())->first();

    if ($existingUmkm) {
        if ($existingUmkm->verification_status === 'pending') {
            return redirect()->route('verifikasi-umkm');
        } elseif ($existingUmkm->verification_status === 'verified') {
            return redirect()->intended('/umkm/dashboard');
        }
    }

    return redirect()->route('pengajuan-umkm.create');
})->middleware('auth')->name('user.umkm-saya');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
