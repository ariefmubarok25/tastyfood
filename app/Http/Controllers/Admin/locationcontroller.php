<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class LocationController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.location.index', compact('setting'));
    }

    public function edit()
    {
        $setting = Setting::first();
        return view('admin.location.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        // VALIDASI SESUAI NAMA KOLOM DI DATABASE
        $request->validate([
            'map_embed_link' => 'required|string',
        ]);

        // Ambil row pertama dari tabel settings
        $setting = Setting::first();

        // Jika belum ada row, buat baru
        if (!$setting) {
            $setting = Setting::create([
                'map_embed_link' => $request->map_embed_link
            ]);
        } 
        // Jika sudah ada, update
        else {
            $setting->update([
                'map_embed_link' => $request->map_embed_link
            ]);
        }

        return redirect()->route('admin.location.index')
            ->with('success', 'Lokasi berhasil diperbarui');
    }
}
