<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $news = new News();
            $news->title = $validated['title'];
            $news->slug = Str::slug($validated['title']);
            $news->content = $validated['content'];
            $news->status = $validated['status'];
            $news->excerpt = Str::limit(strip_tags($validated['content']), 150);

            // Set published_at if status is published
            if ($validated['status'] == 'published') {
                $news->published_at = now();
            }

            // Handle image upload - SIMPAN DI PUBLIC/STORAGE/NEWS
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Simpan langsung ke public/storage/news
                $image->move(public_path('storage/news'), $imageName);
                $news->image = $imageName;
            }

            $news->save();

            return redirect()->route('admin.news')->with('success', 'Berita berhasil ditambahkan!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $news = News::findOrFail($id);
            $news->title = $validated['title'];
            $news->slug = Str::slug($validated['title']);
            $news->content = $validated['content'];
            $news->status = $validated['status'];
            $news->excerpt = Str::limit(strip_tags($validated['content']), 150);

            // Update published_at based on status
            if ($validated['status'] == 'published' && !$news->published_at) {
                $news->published_at = now();
            } elseif ($validated['status'] == 'draft') {
                $news->published_at = null;
            }

            // Handle image upload - SIMPAN DI PUBLIC/STORAGE/NEWS
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($news->image && file_exists(public_path('storage/news/' . $news->image))) {
                    unlink(public_path('storage/news/' . $news->image));
                }

                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Simpan langsung ke public/storage/news
                $image->move(public_path('storage/news'), $imageName);
                $news->image = $imageName;
            }

            $news->save();

            return redirect()->route('admin.news')->with('success', 'Berita berhasil diperbarui!');

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
            $news = News::findOrFail($id);

            // Delete image if exists
            if ($news->image && file_exists(public_path('storage/news/' . $news->image))) {
                unlink(public_path('storage/news/' . $news->image));
            }

            $news->delete();

            return redirect()->route('admin.news')->with('success', 'Berita berhasil dihapus!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
