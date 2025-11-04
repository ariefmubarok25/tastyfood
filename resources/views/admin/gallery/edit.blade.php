@extends('layouts.admin')

@section('title', 'Edit Gambar Galeri')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Edit Gambar</h1>
    <p class="text-gray-600">Edit informasi gambar di galeri</p>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.gallery.update', $image['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-6">
            <!-- Current Image Preview -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
                <div class="bg-gradient-to-br from-blue-400 to-purple-500 h-48 rounded-lg flex items-center justify-center">
                    <span class="text-white font-semibold text-lg">Gambar {{ $image['id'] }}</span>
                </div>
                <p class="text-sm text-gray-500 mt-2">* Untuk mengganti gambar, hapus yang lama dan upload baru</p>
            </div>

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Gambar *</label>
                <input type="text" id="title" name="title" value="{{ $image['title'] }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Masukkan judul untuk gambar">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea id="description" name="description" rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Masukkan deskripsi gambar (opsional)">{{ $image['description'] }}</textarea>
            </div>

            <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.gallery') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Update Gambar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
