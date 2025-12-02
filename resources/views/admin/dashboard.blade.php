@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
    <p class="text-gray-600">Selamat datang di panel administrasi Tasty Food</p>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

    <!-- Total Berita -->
    <div class="bg-white rounded-lg shadow p-6 w-full">
        <div class="flex items-center">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
                <i class="fas fa-newspaper text-blue-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Total Berita</p>
                <p class="text-3xl font-bold">{{ $stats['total_news'] }}</p>
            </div>
        </div>
    </div>

    <!-- Total Galeri -->
    <div class="bg-white rounded-lg shadow p-6 w-full">
        <div class="flex items-center">
            <div class="bg-green-100 p-3 rounded-full mr-4">
                <i class="fas fa-images text-green-600 text-xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Total Galeri</p>
                <p class="text-3xl font-bold">{{ $stats['total_galleries'] }}</p>
            </div>
        </div>
    </div>

</div>

<!-- Latest Section (News + Contacts) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

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

    <!-- Latest Contacts -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Pesan Terbaru</h2>

        <div class="space-y-4">
            @foreach($latestContacts as $contact)
            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded">
                <div>
                    <h3 class="font-medium text-gray-800">{{ $contact->subject }}</h3>
                    <p class="text-sm text-gray-600">
                        Dari: {{ $contact->name }} • {{ $contact->created_at->format('d M Y') }}
                    </p>
                </div>

                <a href="{{ route('admin.contacts.show', $contact->id) }}"
                   class="px-3 py-1 text-xs bg-blue-100 text-blue-800 rounded">
                    Detail
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>


@endsection
