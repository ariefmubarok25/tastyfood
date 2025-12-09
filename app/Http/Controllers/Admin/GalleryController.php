<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'image_alt'   => 'nullable|string|max:255',
        ]);

        $gallery = new Gallery();
        $gallery->title = $validated['title'];
        $gallery->description = $validated['description'];
        $gallery->image_alt = $validated['image_alt'];

        // Upload to storage/gallery/
        if ($request->hasFile('image')) {
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('storage/gallery'), $filename);
            $gallery->image = $filename;
        }

        $gallery->save();

        return redirect()->route('admin.gallery')->with('success', 'Gambar berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'image_alt'   => 'nullable|string|max:255',
        ]);

        $gallery = Gallery::findOrFail($id);

        $gallery->title = $validated['title'];
        $gallery->description = $validated['description'];
        $gallery->image_alt = $validated['image_alt'];

        if ($request->hasFile('image')) {
            // delete old image
            $oldPath = public_path('storage/gallery/' . $gallery->image);
            if (file_exists($oldPath)) unlink($oldPath);

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('storage/gallery'), $filename);
            $gallery->image = $filename;
        }

        $gallery->save();

        return redirect()->route('admin.gallery')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        $oldPath = public_path('storage/gallery/' . $gallery->image);
        if (file_exists($oldPath)) unlink($oldPath);

        $gallery->delete();

        return redirect()->route('admin.gallery')->with('success', 'Galeri berhasil dihapus!');
    }
}
