@extends('layouts.admin')

@section('title', 'Tambah Gambar Galeri')

@section('content')
<h1>Tambah Gambar Galeri</h1>
<p>Tambah gambar baru ke galeri.</p>
<hr>

<div>
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="margin-bottom: 10px;">
            <label for="title">Judul Gambar *</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required style="width: 100%;">
            @error('title')
                <small style="color: red;">Judul harus diisi.</small>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="description">Deskripsi</label><br>
            <textarea id="description" name="description" rows="3" style="width: 100%;">{{ old('description') }}</textarea>
            @error('description')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="image">Gambar *</label><br>
            <input type="file" id="image" name="image" required accept="image/*">
            @error('image')
                <small style="color: red;">Gambar harus diunggah.</small>
            @enderror
            <p><small>Max: 2MB</small></p>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="image_alt">Alt Text Gambar</label><br>
            <input type="text" id="image_alt" name="image_alt" value="{{ old('image_alt') }}" style="width: 100%;">
            @error('image_alt')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="order">Urutan Tampil</label>
            <input type="number" id="order" name="order" value="{{ old('order', 0) }}" min="0" style="width: 50px;">
            @error('order')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label for="is_active">Status *</label>
            <select id="is_active" name="is_active" required>
                <option value="1" {{ old('is_active', 1) == 1 ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Nonaktif</option>
            </select>
            @error('is_active')
                <small style="color: red;">Status harus dipilih.</small>
            @enderror
        </div>

        <div style="margin-top: 15px;">
            <a href="{{ route('admin.gallery') }}" style="margin-right: 10px;">Batal</a>
            <button type="submit">Simpan Gambar</button>
        </div>
    </form>
</div>
@endsection
