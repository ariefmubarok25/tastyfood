@extends('layouts.admin')

@section('title', 'Pengaturan Lokasi')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Pengaturan Lokasi</h1>
    <p class="text-gray-600">Atur lokasi Google Maps yang tampil di website.</p>
</div>

<div class="bg-white shadow rounded-lg p-6">

    @if ($setting && $setting->map_embed_link)
    <div class="mb-6">
        <h2 class="text-lg font-semibold mb-2">Lokasi Saat Ini:</h2>
        <iframe
            src="{{ $setting->map_embed_link }}"
            width="100%"
            height="350"
            style="border:0;"
            allowfullscreen
            loading="lazy">
        </iframe>
    </div>
    @else
    <p class="text-gray-600 mb-6">Belum ada lokasi yang disetting.</p>
    @endif

    <a href="{{ route('admin.location.edit') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
        Edit Lokasi
    </a>
</div>
@endsection