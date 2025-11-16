<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
// Tambahkan import untuk controller admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk Pengunjung
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

// Route untuk Admin (prefix 'admin')
Route::prefix('admin')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Management Berita
    Route::get('/berita', [AdminNewsController::class, 'index'])->name('admin.news');
    Route::get('/berita/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('/berita', [AdminNewsController::class, 'store'])->name('admin.news.store');
    Route::get('/berita/{id}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/berita/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/berita/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');

    // Management Galeri
    Route::get('/galeri', [AdminGalleryController::class, 'index'])->name('admin.gallery');
    Route::get('/galeri/create', [AdminGalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('/galeri', [AdminGalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('/galeri/{id}/edit', [AdminGalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::put('/galeri/{id}', [AdminGalleryController::class, 'update'])->name('admin.gallery.update');
    Route::delete('/galeri/{id}', [AdminGalleryController::class, 'destroy'])->name('admin.gallery.destroy');

    // Management Kontak (lihat pesan masuk)
    Route::get('/kontak', [AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('/kontak/{id}', [AdminContactController::class, 'show'])->name('admin.contact.show');
    Route::delete('/kontak/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
});
