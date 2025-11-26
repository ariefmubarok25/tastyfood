@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<h1>Dashboard Admin</h1>
<p>Selamat datang.</p>
<hr>

{{-- Statistik --}}
<h2>Statistik</h2>
<div style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
    Total Berita: <strong>{{ $stats['total_news'] }}</strong> |
    Total Galeri: <strong>{{ $stats['total_galleries'] }}</strong> |
    Pesan Masuk: <strong>{{ $stats['total_contacts'] }}</strong> |
    Total Pengguna: <strong>{{ $stats['total_users'] }}</strong>
</div>

<div style="display: flex; gap: 20px;">
    {{-- Berita Terbaru --}}
    <div style="flex: 1; border: 1px solid #ccc; padding: 10px;">
        <h3>Berita Terbaru</h3>
        <ul>
            @foreach($latestNews as $news)
            <li>
                {{ $news->title }} ({{ $news->created_at->format('d M Y') }}) - Status: {{ ucfirst($news->status) }}
            </li>
            @endforeach
        </ul>
    </div>

    {{-- Pesan Terbaru --}}
    <div style="flex: 1; border: 1px solid #ccc; padding: 10px;">
        <h3>Pesan Terbaru</h3>
        <ul>
            @foreach($latestMessages as $message)
            <li>
                Dari: **{{ $message->name }}** | Subjek: {{ $message->subject }} | Status: {{ ucfirst($message->status) }}
            </li>
            @endforeach
        </ul>
    </div>
</div>

<hr>

{{-- Quick Actions --}}
<h2>Aksi Cepat</h2>
<div style="margin-top: 10px;">
    <a href="{{ route('admin.news.create') }}">Tambah Berita</a> |
    <a href="{{ route('admin.gallery.create') }}">Tambah Galeri</a> |
    <a href="{{ route('admin.news') }}">Kelola Berita</a> |
    <a href="{{ route('admin.contact') }}">Lihat Pesan</a>
</div>
@endsection
