<?php


use Illuminate\Support\Facades\Route;

// User Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

use App\Models\Setting;

// Admin Controllers
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\LocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =====================
// ROUTE UNTUK PENGUNJUNG
// =====================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');

// Berita
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');

// Galeri
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');

// Kontak (User Form) → HANYA form & simpan
Route::get('/kontak', function () {
    $setting = setting::first(); 
    return view('contact.index', compact('setting'));
})->name('contact');

Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');


// =====================
// ROUTE ADMIN PANEL
// =====================
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Management Berita
    Route::get('/news', [AdminNewsController::class, 'index'])->name('news');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('news.store');
    Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{id}', [AdminNewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])->name('news.destroy');

    // Management Galeri
    Route::get('/gallery', [AdminGalleryController::class, 'index'])->name('gallery');
    Route::get('/gallery/create', [AdminGalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery', [AdminGalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/{id}/edit', [AdminGalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/{id}', [AdminGalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/{id}', [AdminGalleryController::class, 'destroy'])->name('gallery.destroy');

    // Management Kontak
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts');
    Route::get('/contacts/{id}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

    // Management Lokasi Map
    Route::get('/location', [LocationController::class, 'index'])->name('location.index');
    Route::get('/location/edit', [LocationController::class, 'edit'])->name('location.edit');
    Route::post('/location/update', [LocationController::class, 'update'])->name('location.update');
});
