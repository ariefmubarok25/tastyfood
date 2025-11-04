<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Data dummy untuk pesan masuk
        $messages = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'subject' => 'Pertanyaan tentang produk', 'created_at' => now()->subHours(2), 'read' => false],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'subject' => 'Kerjasama bisnis', 'created_at' => now()->subDays(1), 'read' => true],
            ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com', 'subject' => 'Keluhan pelayanan', 'created_at' => now()->subDays(3), 'read' => false],
        ];

        return view('admin.contact.index', compact('messages'));
    }

    public function show($id)
    {
        // Data dummy untuk detail pesan
        $message = [
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Pertanyaan tentang produk ' . $id,
            'message' => 'Ini adalah isi pesan dari pengunjung. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at' => now()->subDays($id),
            'read' => $id % 2 == 0
        ];

        return view('admin.contact.show', compact('message'));
    }

    public function destroy($id)
    {
        // Simulasi penghapusan pesan
        session()->flash('success', 'Pesan berhasil dihapus!');

        return redirect()->route('admin.contact');
    }
}
