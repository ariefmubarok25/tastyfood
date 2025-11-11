<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil berita utama (yang terbaru)
        $featuredNews = News::published()
            ->latest('published_at')
            ->first();

        // Ambil 4 berita terbaru untuk side news
        $latestNews = News::published()
            ->latest('published_at')
            ->take(4)
            ->get();

        // Ambil 6 gambar terbaru untuk galeri
        $galleryImages = Gallery::active()
            ->ordered()
            ->take(6)
            ->get();

        return view('home', compact('featuredNews', 'latestNews', 'galleryImages'));
    }
}
