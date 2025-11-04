@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
    <p class="text-gray-600">Selamat datang di panel administrasi</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
                <i class="fas fa-newspaper text-blue-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Total Berita</p>
                <p class="text-2xl font-bold">12</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-green-100 p-3 rounded-full mr-4">
                <i class="fas fa-images text-green-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Total Galeri</p>
                <p class="text-2xl font-bold">24</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-purple-100 p-3 rounded-full mr-4">
                <i class="fas fa-envelope text-purple-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Pesan Masuk</p>
                <p class="text-2xl font-bold">8</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-yellow-100 p-3 rounded-full mr-4">
                <i class="fas fa-users text-yellow-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Pengunjung</p>
                <p class="text-2xl font-bold">1,234</p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-white rounded-lg shadow p-6">
    <h2 class="text-xl font-semibold mb-4">Quick Actions</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="{{ route('admin.news.create') }}" class="bg-blue-600 text-white text-center py-3 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i>Tambah Berita
        </a>
        <a href="{{ route('admin.gallery.create') }}" class="bg-green-600 text-white text-center py-3 px-4 rounded-lg hover:bg-green-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i>Tambah Galeri
        </a>
        <a href="{{ route('admin.news') }}" class="bg-purple-600 text-white text-center py-3 px-4 rounded-lg hover:bg-purple-700 transition duration-300">
            <i class="fas fa-list mr-2"></i>Kelola Berita
        </a>
        <a href="{{ route('admin.contact') }}" class="bg-yellow-600 text-white text-center py-3 px-4 rounded-lg hover:bg-yellow-700 transition duration-300">
            <i class="fas fa-envelope mr-2"></i>Lihat Pesan
        </a>
    </div>
</div>
@endsection
