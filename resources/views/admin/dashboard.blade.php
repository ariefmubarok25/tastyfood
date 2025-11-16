@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
    <p class="text-gray-600">Selamat datang di panel administrasi Tasty Food</p>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
                <i class="fas fa-newspaper text-blue-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Total Berita</p>
                <p class="text-2xl font-bold">{{ $stats['total_news'] }}</p>
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
                <p class="text-2xl font-bold">{{ $stats['total_galleries'] }}</p>
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
                <p class="text-2xl font-bold">{{ $stats['total_contacts'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-yellow-100 p-3 rounded-full mr-4">
                <i class="fas fa-users text-yellow-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Total Pengguna</p>
                <p class="text-2xl font-bold">{{ $stats['total_users'] }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Latest News -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Berita Terbaru</h2>
        <div class="space-y-4">
            @foreach($latestNews as $news)
            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded">
                <div>
                    <h3 class="font-medium text-gray-800">{{ $news->title }}</h3>
                    <p class="text-sm text-gray-600">{{ $news->created_at->format('d M Y') }}</p>
                </div>
                <span class="px-2 py-1 text-xs rounded-full
                    {{ $news->status == 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                    {{ $news->status }}
                </span>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Latest Messages -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Pesan Terbaru</h2>
        <div class="space-y-4">
            @foreach($latestMessages as $message)
            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded">
                <div>
                    <h3 class="font-medium text-gray-800">{{ $message->name }}</h3>
                    <p class="text-sm text-gray-600">{{ $message->subject }}</p>
                </div>
                <span class="px-2 py-1 text-xs rounded-full
                    {{ $message->status == 'unread' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                    {{ $message->status }}
                </span>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="mt-8 bg-white rounded-lg shadow p-6">
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
