<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Tampilkan halaman form kontak untuk user
    public function index()
    {
        return view('contact.index'); // view untuk user, bukan admin!
    }

    // Simpan pesan dari form Contact Us
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
