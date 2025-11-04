<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Data dummy untuk galeri
        $images = range(1, 12); // 12 gambar dummy

        return view('gallery.index', compact('images'));
    }
}
