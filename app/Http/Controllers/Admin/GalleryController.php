<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        try {
            $gallery = new Gallery();
            $gallery->title = $validated['title'];
            $gallery->description = $validated['description'];
            $gallery->image_alt = $validated['image_alt'];
            $gallery->order = $validated['order'] ?? 0;
            $gallery->is_active = $validated['is_active'];

            // Handle image upload - SIMPAN DI PUBLIC/STORAGE/GALERI
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Simpan langsung ke public/storage/galeri
                $image->move(public_path('storage/galeri'), $imageName);
                $gallery->image = $imageName;
            }

            $gallery->save();

            return redirect()->route('admin.gallery')->with('success', 'Gambar galeri berhasil ditambahkan!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->title = $validated['title'];
            $gallery->description = $validated['description'];
            $gallery->image_alt = $validated['image_alt'];
            $gallery->order = $validated['order'] ?? 0;
            $gallery->is_active = $validated['is_active'];

            // Handle image upload - SIMPAN DI PUBLIC/STORAGE/GALERI
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($gallery->image && file_exists(public_path('storage/galeri/' . $gallery->image))) {
                    unlink(public_path('storage/galeri/' . $gallery->image));
                }

                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Simpan langsung ke public/storage/galeri
                $image->move(public_path('storage/galeri'), $imageName);
                $gallery->image = $imageName;
            }

            $gallery->save();

            return redirect()->route('admin.gallery')->with('success', 'Gambar galeri berhasil diperbarui!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $gallery = Gallery::findOrFail($id);

            // Delete image if exists
            if ($gallery->image && file_exists(public_path('storage/galeri/' . $gallery->image))) {
                unlink(public_path('storage/galeri/' . $gallery->image));
            }

            $gallery->delete();

            return redirect()->route('admin.gallery')->with('success', 'Gambar galeri berhasil dihapus!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
