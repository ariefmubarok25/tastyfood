<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Data dummy untuk daftar berita
        $news = [
            ['id' => 1, 'title' => 'Berita Pertama', 'status' => 'published', 'created_at' => now()->subDays(1)],
            ['id' => 2, 'title' => 'Berita Kedua', 'status' => 'draft', 'created_at' => now()->subDays(2)],
            ['id' => 3, 'title' => 'Berita Ketiga', 'status' => 'published', 'created_at' => now()->subDays(3)],
        ];

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
        ]);

        // Untuk sementara simpan pesan sukses
        session()->flash('success', 'Berita berhasil dibuat!');

        return redirect()->route('admin.news');
    }

    public function edit($id)
    {
        // Data dummy untuk edit berita
        $news = [
            'id' => $id,
            'title' => 'Judul Berita ' . $id,
            'content' => 'Konten berita ' . $id,
            'status' => 'published'
        ];

        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
        ]);

        session()->flash('success', 'Berita berhasil diperbarui!');

        return redirect()->route('admin.news');
    }

    public function destroy($id)
    {
        // Simulasi penghapusan berita
        session()->flash('success', 'Berita berhasil dihapus!');

        return redirect()->route('admin.news');
    }
}
