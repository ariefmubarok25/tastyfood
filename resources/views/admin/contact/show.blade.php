@extends('layouts.admin')

@section('title', 'Detail Pesan')

@section('content')
<h1>Detail Pesan</h1>
<p>Lihat detail pesan dari pengunjung.</p>

<a href="{{ route('admin.contact') }}">Kembali</a>

<hr>

<div>
    {{-- Header Pesan --}}
    <div style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
        <p>
            **Dari:** {{ $message['name'] }} ({{ $message['email'] }})<br>
            **Tanggal:** {{ \Carbon\Carbon::parse($message['created_at'])->format('d M Y, H:i') }}<br>
            **Status:** {{ !$message['read'] ? 'Pesan Baru' : 'Sudah Dibaca' }}
        </p>
    </div>

    {{-- Konten Pesan --}}
    <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px;">
        <h3>Subjek: {{ $message['subject'] }}</h3>
        <hr>
        <p style="white-space: pre-line;">
            {{ $message['message'] }}
        </p>
    </div>

    {{-- Tombol Aksi --}}
    <div style="margin-bottom: 20px;">
        <p>ID Pesan: #{{ $message['id'] }}</p>
        <button style="margin-right: 10px;">Balas</button>

        <form action="{{ route('admin.contact.destroy', $message['id']) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Hapus pesan ini?')">Hapus</button>
        </form>
    </div>

    <hr>

    {{-- Informasi Tambahan (disederhanakan) --}}
    <h2>Informasi Pengirim</h2>
    <div style="border: 1px solid #ccc; padding: 10px;">
        <p>Nama: {{ $message['name'] }}</p>
        <p>Email: {{ $message['email'] }}</p>
    </div>

</div>
@endsection
