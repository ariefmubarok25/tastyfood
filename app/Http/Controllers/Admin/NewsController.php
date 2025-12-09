<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

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
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        try {
            $news = new News();
            $news->title   = $validated['title'];
            $news->content = $validated['content'];

            // Upload image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('storage/news'), $imageName);
                $news->image = $imageName;
            }

            $news->save();

            return redirect()
                ->route('admin.news')
                ->with('success', 'Berita berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        try {
            $news = News::findOrFail($id);
            $news->title   = $validated['title'];
            $news->content = $validated['content'];

            // Update image
            if ($request->hasFile('image')) {
                if ($news->image && file_exists(public_path('storage/news/' . $news->image))) {
                    unlink(public_path('storage/news/' . $news->image));
                }

                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('storage/news'), $imageName);
                $news->image = $imageName;
            }

            $news->save();

            return redirect()
                ->route('admin.news')
                ->with('success', 'Berita berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $news = News::findOrFail($id);

            if ($news->image && file_exists(public_path('storage/news/' . $news->image))) {
                unlink(public_path('storage/news/' . $news->image));
            }

            $news->delete();

            return redirect()
                ->route('admin.news')
                ->with('success', 'Berita berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
