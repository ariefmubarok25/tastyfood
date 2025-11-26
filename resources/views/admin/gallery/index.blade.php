@extends('layouts.admin')

@section('title', 'Management Galeri')

@section('content')
<h1>Management Galeri</h1>
<p>Kelola gambar galeri website</p>

<a href="{{ route('admin.gallery.create') }}">Tambah Gambar</a>

<hr>

@if(session('success'))
<div style="border: 1px solid green; padding: 5px; margin-bottom: 10px;">{{ session('success') }}</div>
@endif
@if(session('error'))
<div style="border: 1px solid red; padding: 5px; margin-bottom: 10px;">{{ session('error') }}</div>
@endif

<table border="1" style="width: 100%; margin-top: 15px;">
    <thead>
        <tr>
            <th style="padding: 5px;">Gambar</th>
            <th style="padding: 5px;">Judul (Alt)</th>
            <th style="padding: 5px;">Status</th>
            <th style="padding: 5px;">Urutan</th>
            <th style="padding: 5px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($galleries as $item)
        <tr>
            <td style="padding: 5px; text-align: center;">
                @if($item->image)
                    <img src="{{ asset('storage/galeri/' . $item->image) }}" alt="{{ $item->title }}" style="width: 50px; height: 50px; object-fit: cover;">
                @else
                    [N/A]
                @endif
            </td>
            <td style="padding: 5px;">
                {{ $item->title }}
                <br><small>Alt: {{ $item->image_alt }}</small>
                {{-- Deskripsi dihilangkan dari tabel untuk mempersingkat --}}
            </td>
            <td style="padding: 5px; text-align: center;">
                {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
            </td>
            <td style="padding: 5px; text-align: center;">
                {{ $item->order }}
            </td>
            <td style="padding: 5px; text-align: center;">
                <a href="{{ route('admin.gallery.edit', $item->id) }}">Edit</a>
                <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus gambar ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="padding: 10px; text-align: center;">
                Belum ada gambar galeri yang ditambahkan.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@if($galleries->count() > 0)
<div style="margin-top: 10px; padding: 5px;">
    <small>Menampilkan {{ $galleries->count() }} gambar</small>
    @if(method_exists($galleries, 'links') && $galleries->hasPages())
    <div>
        {{ $galleries->links() }}
    </div>
    @endif
</div>
@endif
@endsection
