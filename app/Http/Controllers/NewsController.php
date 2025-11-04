<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Untuk sementara menggunakan data dummy
        $news = [
            ['id' => 1, 'title' => 'Berita Pertama', 'date' => now()->subDays(1), 'excerpt' => 'Ini adalah berita pertama yang sangat menarik untuk dibaca...'],
            ['id' => 2, 'title' => 'Berita Kedua', 'date' => now()->subDays(2), 'excerpt' => 'Ini adalah berita kedua dengan informasi terbaru dari kami...'],
            ['id' => 3, 'title' => 'Berita Ketiga', 'date' => now()->subDays(3), 'excerpt' => 'Berita ketiga ini berisi tentang perkembangan terbaru...'],
            ['id' => 4, 'title' => 'Berita Keempat', 'date' => now()->subDays(4), 'excerpt' => 'Update penting dari perusahaan untuk para pelanggan...'],
            ['id' => 5, 'title' => 'Berita Kelima', 'date' => now()->subDays(5), 'excerpt' => 'Informasi mengenai event yang akan datang...'],
            ['id' => 6, 'title' => 'Berita Keenam', 'date' => now()->subDays(6), 'excerpt' => 'Pencapaian terbaru yang berhasil kami raih...'],
        ];

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        // Data dummy untuk detail berita
        $news = [
            'id' => $id,
            'title' => 'Judul Berita ' . $id,
            'date' => now()->subDays($id),
            'content' => 'Ini adalah konten lengkap dari berita ' . $id . '. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
            'image' => null
        ];

        return view('news.show', compact('news'));
    }
}
