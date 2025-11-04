@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-blue-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang</h1>
        <p class="text-xl md:text-2xl mb-8">Website resmi kami dengan informasi terbaru</p>
        <a href="{{ route('about') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
            Pelajari Lebih Lanjut
        </a>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-newspaper text-blue-600 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Berita Terkini</h3>
            <p class="text-gray-600">Informasi dan update terbaru dari kami</p>
        </div>
        <div class="text-center">
            <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-images text-green-600 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Galeri</h3>
            <p class="text-gray-600">Kumpulan foto dan dokumentasi kegiatan</p>
        </div>
        <div class="text-center">
            <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-envelope text-purple-600 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Kontak</h3>
            <p class="text-gray-600">Hubungi kami untuk informasi lebih lanjut</p>
        </div>
    </div>
</div>
@endsection
