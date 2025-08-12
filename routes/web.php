<?php

use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProduct;
use App\Http\Controllers\RegisteredUmkmController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UmkmVerificationController;
use App\Http\Controllers\Umkm\DashboardController as UmkmDashboardController;
use App\Http\Controllers\Umkm\UmkmProfileController;
use App\Http\Controllers\Umkm\UmkmGalleryController;
use App\Http\Controllers\Umkm\UmkmSocialController;

Route::get('/', function () {
    return view('landingPage.index');
})->name('home');

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

    // Article Management Routes
    Route::resource('articles', AdminArticleController::class)->names([
        'index' => 'admin.articles.index',
        'create' => 'admin.articles.create',
        'store' => 'admin.articles.store',
        'show' => 'admin.articles.show',
        'edit' => 'admin.articles.edit',
        'update' => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
    ]);

    // Additional article routes
    Route::patch('articles/{id}/restore', [AdminArticleController::class, 'restore'])->name('admin.articles.restore');
    Route::delete('articles/{id}/force-delete', [AdminArticleController::class, 'forceDelete'])->name('admin.articles.force-delete');

    // Comment management routes
    Route::get('comments', [AdminCommentController::class, 'index'])->name('admin.comments.index');
    Route::delete('comments/{comment}', [AdminCommentController::class, 'destroy'])->name('admin.comments.destroy');
    Route::patch('comments/{id}/restore', [AdminCommentController::class, 'restore'])->name('admin.comments.restore');
    Route::delete('comments/{id}/force-delete', [AdminCommentController::class, 'forceDelete'])->name('admin.comments.force-delete');
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
