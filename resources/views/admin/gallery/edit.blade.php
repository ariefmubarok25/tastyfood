@extends('layouts.admin')

@section('title', 'Edit Gambar Galeri')

@section('content')

<div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold text-gray-700 mb-1">Edit Gambar Galeri</h2>
    <p class="text-gray-500 mb-6">Perbarui informasi dan gambar galeri.</p>

    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-5">
            <label for="title" class="block font-medium text-gray-700 mb-1">Judul Gambar *</label>
            <input type="text"
                   id="title"
                   name="title"
                   value="{{ old('title', $gallery->title) }}"
                   required
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('title')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Deskripsi --}}
        <div class="mb-5">
            <label for="description" class="block font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea id="description"
                      name="description"
                      rows="3"
                      class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description', $gallery->description) }}</textarea>
            @error('description')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Preview Gambar --}}
        <div class="mb-5">
            <label for="image" class="block font-medium text-gray-700 mb-2">Gambar Saat Ini</label>

            @if($gallery->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/galeri/' . $gallery->image) }}"
                         alt="{{ $gallery->title }}"
                         class="w-28 h-28 object-cover rounded border">
                    <p class="text-sm text-gray-500 mt-1">Gambar saat ini</p>
                </div>
            @endif

            <label class="block font-medium text-gray-700 mb-1">Ubah Gambar (opsional)</label>
            <input type="file"
                   id="image"
                   name="image"
                   accept="image/*"
                   class="w-full border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500">
            <p class="text-gray-500 text-sm mt-1">Ukuran maksimal: 2MB</p>
            @error('image')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Alt Text --}}
        <div class="mb-5">
            <label for="image_alt" class="block font-medium text-gray-700 mb-1">Alt Text</label>
            <input type="text"
                   id="image_alt"
                   name="image_alt"
                   value="{{ old('image_alt', $gallery->image_alt) }}"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('image_alt')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Tombol --}}
        <div class="flex items-center justify-end gap-3 mt-6">
            <a href="{{ route('admin.gallery') }}"
               class="px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">
                Batal
            </a>

            <button type="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
                Update Gambar
            </button>
        </div>
    </form>
</div>

@endsection
