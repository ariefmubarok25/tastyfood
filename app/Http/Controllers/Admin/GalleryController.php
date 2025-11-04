<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Data dummy untuk galeri
        $images = [
            ['id' => 1, 'name' => 'Gambar 1', 'uploaded_at' => now()->subDays(1)],
            ['id' => 2, 'name' => 'Gambar 2', 'uploaded_at' => now()->subDays(2)],
            ['id' => 3, 'name' => 'Gambar 3', 'uploaded_at' => now()->subDays(3)],
        ];

        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        session()->flash('success', 'Gambar berhasil diupload!');

        return redirect()->route('admin.gallery');
    }

    public function edit($id)
    {
        // Data dummy untuk edit galeri
        $image = [
            'id' => $id,
            'title' => 'Judul Gambar ' . $id,
            'description' => 'Deskripsi gambar ' . $id,
        ];

        return view('admin.gallery.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        session()->flash('success', 'Gambar berhasil diperbarui!');

        return redirect()->route('admin.gallery');
    }

    public function destroy($id)
    {
        // Simulasi penghapusan gambar
        session()->flash('success', 'Gambar berhasil dihapus!');

        return redirect()->route('admin.gallery');
    }
}
