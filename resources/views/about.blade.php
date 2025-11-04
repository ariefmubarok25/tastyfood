@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-center mb-8">Tentang Kami</h1>

        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <h2 class="text-2xl font-semibold mb-4">Sejarah Perusahaan</h2>
            <p class="text-gray-700 mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <h2 class="text-2xl font-semibold mb-4">Visi & Misi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-blue-600 mb-3">Visi</h3>
                    <p class="text-gray-700">Menjadi perusahaan terdepan dalam memberikan solusi terbaik untuk kebutuhan Anda.</p>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-green-600 mb-3">Misi</h3>
                    <ul class="text-gray-700 list-disc list-inside space-y-2">
                        <li>Memberikan pelayanan terbaik</li>
                        <li>Inovasi terus menerus</li>
                        <li>Kepuasan pelanggan utama</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
