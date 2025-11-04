@extends('layouts.admin')

@section('title', 'Management Galeri')

@section('content')
<div class="mb-8">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Management Galeri</h1>
            <p class="text-gray-600">Kelola gambar dan foto untuk galeri</p>
        </div>
        <a href="{{ route('admin.gallery.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i>Tambah Gambar
        </a>
    </div>
</div>

<!-- Notifikasi -->
@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
    {{ session('success') }}
</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach($images as $image)
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
        <div class="bg-gradient-to-br from-blue-400 to-purple-500 h-48 flex items-center justify-center">
            <span class="text-white font-semibold text-lg">Gambar {{ $image['id'] }}</span>
        </div>
        <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">{{ $image['name'] }}</h3>
            <p class="text-sm text-gray-600 mb-3">
                Diupload: {{ \Carbon\Carbon::parse($image['uploaded_at'])->format('d M Y') }}
            </p>
            <div class="flex justify-between items-center">
                <a href="{{ route('admin.gallery.edit', $image['id']) }}" class="text-blue-600 hover:text-blue-800 text-sm">
                    <i class="fas fa-edit mr-1"></i>Edit
                </a>
                <form action="{{ route('admin.gallery.destroy', $image['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800 text-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">
                        <i class="fas fa-trash mr-1"></i>Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Upload Area (placeholder untuk drag & drop) -->
<div class="mt-8 border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
    <p class="text-gray-600 mb-2">Drag & drop gambar di sini untuk upload multiple</p>
    <p class="text-sm text-gray-500">Support: JPG, PNG, GIF (Max. 2MB per gambar)</p>
</div>
@endsection
