@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-2">Edit Berita</h1>
    <p class="text-gray-600 mb-6">Perbarui artikel berita.</p>
    <hr class="mb-6">

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-5">
            <label for="title" class="block font-medium text-gray-700">
                Judul Berita <span class="text-red-500">*</span>
            </label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $news->title) }}"
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
            >{{ old('content', $news->content) }}</textarea>

            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Gambar --}}
        <div class="mb-6">
            <label class="block font-medium text-gray-700">
                Gambar Berita
            </label>

            @if ($news->image)
                <div class="flex items-center gap-4 mt-2 mb-3">
                    <img
                        src="{{ asset('storage/news/' . $news->image) }}"
                        alt="Gambar Saat Ini"
                        class="w-28 h-28 object-cover rounded-lg border"
                    >
                    <p class="text-sm text-gray-500">
                        Gambar saat ini<br>
                        Upload gambar baru untuk mengganti
                    </p>
                </div>
            @endif

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                class="block w-full mt-2 text-gray-700"
            >

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
                Update Berita
            </button>
        </div>
    </form>
</div>
@endsection
