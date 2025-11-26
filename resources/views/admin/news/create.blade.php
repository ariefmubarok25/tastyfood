@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')
<h1>Tambah Berita Baru</h1>
<p>Buat artikel baru.</p>
<hr>

<div>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="margin-bottom: 10px;">
            <label for="title">Judul Berita *</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required style="width: 100%;">
            @error('title')
                <small style="color: red;">Judul harus diisi.</small>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="content">Konten Berita *</label><br>
            <textarea id="content" name="content" rows="10" required style="width: 100%;">{{ old('content') }}</textarea>
            @error('content')
                <small style="color: red;">Konten harus diisi.</small>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="image">Gambar Berita</label><br>
            <input type="file" id="image" name="image" accept="image/*">
            @error('image')
                <small style="color: red;">File gambar tidak valid.</small>
            @enderror
            <p><small>Max: 2MB</small></p>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="status">Status *</label><br>
            <select id="status" name="status" required>
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
            </select>
            @error('status')
                <small style="color: red;">Status harus dipilih.</small>
            @enderror
        </div>

        <div style="margin-top: 15px;">
            <a href="{{ route('admin.news') }}" style="margin-right: 10px;">Batal</a>
            <button type="submit">Simpan Berita</button>
        </div>
    </form>
</div>
@endsection
