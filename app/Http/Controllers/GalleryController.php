<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display gallery page
     */
    public function index()
    {
        // Ambil data gallery dari database yang aktif
        $galleryImages = Gallery::where('is_active', true)
                               ->orderBy('order', 'asc')
                               ->orderBy('created_at', 'desc')
                               ->get();

        // Ambil 3 gambar pertama untuk carousel
        $carouselImages = $galleryImages->take(3);

        return view('gallery.index', compact('galleryImages', 'carouselImages'));
    }

    /**
     * Debug images for troubleshooting - SESUAI DENGAN ROUTE
     */
    public function debugImages()
    {
        $galleryData = Gallery::all();

        return response()->json([
            'message' => 'Debug Gallery Images from Database',
            'total_items' => $galleryData->count(),
            'active_items' => $galleryData->where('is_active', true)->count(),
            'data' => $galleryData->map(function($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'image' => $item->image,
                    'description' => $item->description,
                    'is_active' => $item->is_active,
                    'order' => $item->order,
                    'image_url' => asset('storage/gallery/' . $item->image), // Sesuaikan path
                    'created_at' => $item->created_at
                ];
            })
        ]);
    }

    /**
     * Additional debug function untuk test
     */
    public function testGallery()
    {
        return response()->json([
            'message' => 'Gallery Controller is working!',
            'route' => 'gallery',
            'method' => 'index',
            'timestamp' => now()
        ]);
    }
}
