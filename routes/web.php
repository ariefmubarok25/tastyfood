<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

// Route untuk Pengunjung
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

// Route untuk Admin (prefix 'admin')
Route::prefix('admin')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    // Management Berita
    Route::get('/berita', [App\Http\Controllers\Admin\NewsController::class, 'index'])->name('admin.news');
    Route::get('/berita/create', [App\Http\Controllers\Admin\NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/berita', [App\Http\Controllers\Admin\NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/berita/{id}/edit', [App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/berita/{id}', [App\Http\Controllers\Admin\NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/berita/{id}', [App\Http\Controllers\Admin\NewsController::class, 'destroy'])->name('admin.news.destroy');

    // Management Galeri
    Route::get('/galeri', [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('admin.gallery');
    Route::get('/galeri/create', [App\Http\Controllers\Admin\GalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('/galeri', [App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('/galeri/{id}/edit', [App\Http\Controllers\Admin\GalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::put('/galeri/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'update'])->name('admin.gallery.update');
    Route::delete('/galeri/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('admin.gallery.destroy');

    // Management Kontak (lihat pesan masuk)
    Route::get('/kontak', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact');
    Route::get('/kontak/{id}', [App\Http\Controllers\Admin\ContactController::class, 'show'])->name('admin.contact.show');
    Route::delete('/kontak/{id}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('admin.contact.destroy');


});

$nama = 'dika';
Route::view('/test', 'contoh.contohfile', [
    'nama' => $nama
]);
