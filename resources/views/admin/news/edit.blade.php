@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<h1>Edit Berita</h1>
<p>Edit artikel yang sudah ada.</p>
<hr>

<div>
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label for="title">Judul Berita *</label><br>
            <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" required style="width: 100%; padding: 5px;">
            @error('title')
                <small style="color: red;">Judul harus diisi.</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="content">Konten Berita *</label><br>
            <textarea id="content" name="content" rows="10" required style="width: 100%; padding: 5px;">{{ old('content', $news->content) }}</textarea>
            @error('content')
                <small style="color: red;">Konten harus diisi.</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="image">Gambar Berita</label><br>
            @if($news->image)
            <div style="margin-bottom: 5px;">
                <img src="{{ asset('storage/news/' . $news->image) }}" alt="Gambar Saat Ini" style="width: 100px; height: 100px; object-fit: cover;">
                <p><small>Gambar saat ini</small></p>
            </div>
            @endif
            <input type="file" id="image" name="image" accept="image/*">
            @error('image')
                <small style="color: red;">Format gambar tidak valid.</small>
            @enderror
            <p><small>Max: 2MB</small></p>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="status">Status *</label><br>
            <select id="status" name="status" required style="padding: 5px;">
                <option value="draft" {{ old('status', $news->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $news->status) == 'published' ? 'selected' : '' }}>Published</option>
            </select>
            @error('status')
                <small style="color: red;">Status harus dipilih.</small>
            @enderror
        </div>

        <div style="margin-top: 15px;">
            <a href="{{ route('admin.news') }}" style="margin-right: 10px;">Batal</a>
            <button type="submit">Update Berita</button>
        </div>
    </form>
</div>
@endsection
