@extends('layouts.app')

@section('title', $news['title'])

@section('content')
<div class="container mx-auto px-4 py-12">
    <article class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header Artikel -->
        <div class="bg-gray-300 h-64"></div>

        <div class="p-8">
            <div class="flex items-center text-sm text-gray-600 mb-4">
                <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full font-semibold">
                    {{ \Carbon\Carbon::parse($news['date'])->format('d M Y') }}
                </span>
                <span class="mx-2">•</span>
                <span>5 menit membaca</span>
            </div>

            <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $news['title'] }}</h1>

            <div class="prose max-w-none text-gray-700 leading-relaxed">
                <p class="mb-4">{{ $news['content'] }}</p>

                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

                <p class="mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="{{ route('news') }}" class="text-blue-600 font-semibold hover:text-blue-800">
                    ← Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </article>
</div>
@endsection
