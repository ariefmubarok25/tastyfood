<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        // Validasi form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Untuk sementara, kita simpan data di session
        // Nanti bisa dikembangkan untuk menyimpan ke database atau mengirim email
        session()->flash('success', 'Pesan Anda telah berhasil dikirim! Kami akan membalasnya secepatnya.');

        // Redirect kembali ke halaman kontak dengan pesan sukses
        return redirect()->route('contact');
    }
}
