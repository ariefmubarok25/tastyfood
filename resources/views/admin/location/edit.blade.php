@extends('layouts.admin')

@section('title', 'Edit Lokasi')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Edit Lokasi Google Maps</h1>
    <p class="text-gray-600">Masukkan link embed Google Maps (bagian src).</p>
</div>

<div class="bg-white shadow rounded-lg p-6">

    <form action="{{ route('admin.location.update') }}" method="POST">
        @csrf

        <!-- Input Google Maps Embed Link -->
        <div class="mb-6">
            <label for="map_embed_link" class="block text-sm font-semibold text-gray-700 mb-2">
                Link Embed Google Maps (src)
            </label>

            <textarea
                name="map_embed_link"
                id="map_embed_link"
                rows="5"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Masukkan link src Google Maps iframe"
            >{{ old('map_embed_link', $setting->map_embed_link) }}</textarea>

            <p class="text-xs text-gray-500 mt-2">
                👉 Ambil dari Google Maps:<br>
                <b>Share → Embed a map → Copy HTML → Ambil bagian src="" saja</b>
            </p>
        </div>

        <!-- Tombol Simpan -->
        <button
            type="submit"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Simpan
        </button>
    </form>

</div>
@endsection
