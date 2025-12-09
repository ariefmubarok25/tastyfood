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
        ]);

        try {
            $gallery = new Gallery();
            $gallery->title = $validated['title'];
            $gallery->description = $validated['description'] ?? null;

            // Upload image
            if ($request->hasFile('image')) {
                $filename = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('storage/gallery'), $filename);
                $gallery->image = $filename;
            }

            $gallery->save();

            return redirect()
                ->route('admin.gallery')
                ->with('success', 'Gambar galeri berhasil ditambahkan.');

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
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
        ]);

        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->title = $validated['title'];
            $gallery->description = $validated['description'] ?? null;

            if ($request->hasFile('image')) {
                // Hapus gambar lama
                if ($gallery->image && file_exists(public_path('storage/gallery/' . $gallery->image))) {
                    unlink(public_path('storage/gallery/' . $gallery->image));
                }

                $filename = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('storage/gallery'), $filename);
                $gallery->image = $filename;
            }

            $gallery->save();

            return redirect()
                ->route('admin.gallery')
                ->with('success', 'Galeri berhasil diperbarui.');

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $gallery = Gallery::findOrFail($id);

            if ($gallery->image && file_exists(public_path('storage/gallery/' . $gallery->image))) {
                unlink(public_path('storage/gallery/' . $gallery->image));
            }

            $gallery->delete();

            return redirect()
                ->route('admin.gallery')
                ->with('success', 'Galeri berhasil dihapus.');

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
