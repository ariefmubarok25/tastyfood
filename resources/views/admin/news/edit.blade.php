@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Edit Berita</h1>
    <p class="text-gray-600">Edit berita atau artikel yang sudah ada</p>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.news.update', $news['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Berita *</label>
                <input type="text" id="title" name="title" value="{{ $news['title'] }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Masukkan judul berita">
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Konten Berita *</label>
                <textarea id="content" name="content" rows="12" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Tulis konten berita di sini...">{{ $news['content'] }}</textarea>
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status *</label>
                <select id="status" name="status" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="draft" {{ $news['status'] == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $news['status'] == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>

            <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.news') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Update Berita
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
