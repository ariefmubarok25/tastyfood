@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-2">Tambah Berita Baru</h1>
    <p class="text-gray-600 mb-6">Buat artikel berita baru.</p>
    <hr class="mb-6">

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Judul --}}
        <div class="mb-5">
            <label for="title" class="block font-medium text-gray-700">
                Judul Berita <span class="text-red-500">*</span>
            </label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                required
            >
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Konten --}}
        <div class="mb-5">
            <label for="content" class="block font-medium text-gray-700">
                Konten Berita <span class="text-red-500">*</span>
            </label>
            <textarea
                id="content"
                name="content"
                rows="10"
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                required
            >{{ old('content') }}</textarea>

            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Gambar --}}
        <div class="mb-6">
            <label for="image" class="block font-medium text-gray-700">
                Gambar Berita
            </label>
            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                class="mt-2 block w-full text-gray-700"
            >
            <p class="text-sm text-gray-500 mt-1">
                (Opsional, JPG/PNG maksimal 10MB)
            </p>

            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-3 mt-8">
            <a
                href="{{ route('admin.news') }}"
                class="px-4 py-2 rounded-lg border text-gray-700 hover:bg-gray-100"
            >
                Batal
            </a>

            <button
                type="submit"
                class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
            >
                Simpan Berita
            </button>
        </div>
    </form>
</div>
@endsection
