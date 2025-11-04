@extends('layouts.admin')

@section('title', 'Tambah Gambar Galeri')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Tambah Gambar Baru</h1>
    <p class="text-gray-600">Upload gambar baru ke galeri website</p>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Gambar *</label>
                <input type="text" id="title" name="title" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Masukkan judul untuk gambar">
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar *</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-3"></i>
                    <p class="text-gray-600 mb-2">Klik untuk memilih gambar atau drag & drop</p>
                    <p class="text-sm text-gray-500 mb-4">Support: JPG, PNG, GIF (Max. 2MB)</p>
                    <input type="file" id="image" name="image" accept="image/*" required
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea id="description" name="description" rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Masukkan deskripsi gambar (opsional)"></textarea>
            </div>

            <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.gallery') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Upload Gambar
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Preview Area -->
<div class="mt-8 bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">Preview Gambar</h3>
    <div id="imagePreview" class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hidden">
        <img id="preview" class="max-w-full max-h-64 mx-auto rounded-lg">
    </div>
</div>

<script>
    // Image preview functionality
    document.getElementById('image').addEventListener('change', function(e) {
        const preview = document.getElementById('preview');
        const previewContainer = document.getElementById('imagePreview');
        const file = e.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            previewContainer.classList.add('hidden');
        }
    });
</script>
@endsection
