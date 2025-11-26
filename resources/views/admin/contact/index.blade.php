@extends('layouts.admin')

@section('title', 'Pesan Masuk')

@section('content')
<h1>Pesan Masuk</h1>
<p>Kelola pesan yang masuk dari pengunjung.</p>
<hr>

{{-- Notifikasi --}}
@if(session('success'))
<div style="border: 1px solid green; padding: 5px; margin-bottom: 10px;">{{ session('success') }}</div>
@endif

<table border="1" style="width: 100%; margin-top: 15px;">
    <thead>
        <tr>
            <th>Pengirim</th>
            <th>Subjek & Pesan</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr style="{{ !$message['read'] ? 'background-color: #eee;' : '' }}">
            <td style="padding: 5px;">
                <strong>{{ $message['name'] }}</strong>
                <br><small>{{ $message['email'] }}</small>
            </td>
            <td style="padding: 5px;">
                <strong>{{ $message['subject'] }}</strong>
                <br><small>{{ Str::limit('Pesan dari ' . $message['name'] . '...', 50) }}</small>
            </td>
            <td style="padding: 5px;">
                {{ \Carbon\Carbon::parse($message['created_at'])->format('d M Y H:i') }}
            </td>
            <td style="padding: 5px;">
                @if(!$message['read'])
                    **Baru**
                @else
                    Terbaca
                @endif
            </td>
            <td style="padding: 5px;">
                <a href="{{ route('admin.contact.show', $message['id']) }}">Lihat</a>
                <form action="{{ route('admin.contact.destroy', $message['id']) }}" method="POST" style="display: inline; margin-left: 5px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr style="margin-top: 20px; margin-bottom: 20px;">

{{-- Statistik Sederhana --}}
<h2>Statistik Pesan</h2>
<div style="border: 1px solid black; padding: 10px;">
    Total Pesan: **{{ count($messages) }}** |
    Sudah Dibaca: **{{ count(array_filter($messages, function($msg) { return $msg['read']; })) }}** |
    Belum Dibaca: **{{ count(array_filter($messages, function($msg) { return !$msg['read']; })) }}**
</div>

@endsection
