@extends('layouts.admin')

@section('title', 'Berita')

@section('content')
<h1>Berita</h1>
<a href="{{ route('admin.news.create') }}">Tambah</a>
<hr>

{{-- Notifikasi --}}
@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<table border="1" width="100%">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Judul (Status)</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($news as $item)
        <tr>
            <td>
                @if($item->image)
                    <img src="{{ asset('storage/news/' . $item->image) }}" style="width: 50px;">
                @else
                    [N/A]
                @endif
            </td>
            <td>
                {{ $item->title }} ({{ ucfirst($item->status) }})
                <br><small>{{ $item->created_at->format('d/m/Y') }}</small>
            </td>
            <td>
                <a href="{{ route('admin.news.edit', $item->id) }}">Edit</a>
                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" align="center">Belum ada data.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
