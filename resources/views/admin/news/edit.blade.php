@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-2">Edit Berita</h1>
    <p class="text-gray-600 mb-6">Edit artikel yang sudah ada.</p>
    <hr class="mb-6">

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-5">
            <label for="title" class="block font-medium text-gray-700">Judul Berita *</label>
            <input type="text" id="title" name="title"
                   value="{{ old('title', $news->title) }}"
                   class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                   required>
            @error('title')
                <p class="text-red-500 text-sm mt-1">Judul harus diisi.</p>
            @enderror
        </div>

        {{-- Konten --}}
        <div class="mb-5">
            <label for="content" class="block font-medium text-gray-700">Konten Berita *</label>
            <textarea id="content" name="content" rows="10" required
                      class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">{{ old('content', $news->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">Konten harus diisi.</p>
            @enderror
        </div>

        {{-- Gambar --}}
        <div class="mb-6">
            <label for="image" class="block font-medium text-gray-700">Gambar Berita</label>

            @if ($news->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/news/' . $news->image) }}"
                         alt="Gambar Saat Ini"
                         class="w-24 h-24 object-cover rounded border">
                    <p class="text-gray-500 text-sm mt-1">Gambar saat ini</p>
                </div>
            @endif

            <input type="file" id="image" name="image" accept="image/*"
                   class="block w-full mt-2 text-gray-700">

            @error('image')
                <p class="text-red-500 text-sm mt-1">Format gambar tidak valid.</p>
            @enderror

            <p class="text-sm text-gray-500 mt-1">Max: 2MB</p>
        </div>

        {{-- Status --}}
        <div class="mb-6">
            <label for="status" class="block font-medium text-gray-700">Status *</label>
            <select id="status" name="status" required
                    class="w-full mt-1 border rounded-lg px-3 py-2 bg-white focus:ring focus:ring-blue-300">
                <option value="draft" {{ old('status', $news->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $news->status) == 'published' ? 'selected' : '' }}>Published</option>
            </select>
            @error('status')
                <p class="text-red-500 text-sm mt-1">Status harus dipilih.</p>
            @enderror
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-3 mt-8">
            <a href="{{ route('admin.news') }}"
               class="px-4 py-2 rounded-lg border text-gray-700 hover:bg-gray-100">
                Batal
            </a>

            <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Update Berita
            </button>
        </div>
    </form>
</div>
@endsection
