@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-12">Berita Terkini</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Sample News Items -->
        @foreach($news as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <div class="bg-gray-300 h-48"></div>
            <div class="p-6">
                <span class="text-sm text-blue-600 font-semibold">{{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}</span>
                <h3 class="text-xl font-semibold mt-2 mb-3">{{ $item['title'] }}</h3>
                <p class="text-gray-600 mb-4">
                    {{ $item['excerpt'] }}
                </p>
                <!-- PERBAIKAN: Ganti # dengan route yang benar -->
                <a href="{{ route('news.show', $item['id']) }}" class="text-blue-600 font-semibold hover:text-blue-800">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
