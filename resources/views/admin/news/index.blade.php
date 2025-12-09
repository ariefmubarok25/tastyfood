@extends('layouts.admin')

@section('title', 'Management Berita')

@section('content')
<div class="mb-8">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Management Berita</h1>
            <p class="text-gray-600">Kelola berita dan artikel website</p>
        </div>
        <a href="{{ route('admin.news.create') }}"
           class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            + Tambah Berita
        </a>
    </div>
</div>

{{-- Notifikasi --}}
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        {{ session('error') }}
    </div>
@endif

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        No.
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Gambar
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Judul
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Konten
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($news as $item)
                <tr class="hover:bg-gray-50">

                    {{-- No --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        {{ $loop->iteration }}
                    </td>

                    {{-- Gambar --}}
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($item->image)
                            <img src="{{ asset('storage/news/' . $item->image) }}"
                                 alt="{{ $item->title }}"
                                 class="w-16 h-16 object-cover rounded">
                        @else
                            <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center text-gray-400 text-xs">
                                Tidak ada gambar
                            </div>
                        @endif
                    </td>

                    {{-- Judul --}}
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-gray-900">
                            {{ $item->title }}
                        </div>
                    </td>

                    {{-- Konten --}}
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-500">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100) }}
                        </div>
                    </td>

                    {{-- Aksi --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-3">

                            <a href="{{ route('admin.news.edit', $item->id) }}"
                               class="text-blue-600 hover:text-blue-900">
                                Edit
                            </a>

                            <form action="{{ route('admin.news.destroy', $item->id) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')"
                                        class="text-red-600 hover:text-red-900">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        Belum ada berita yang ditambahkan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>



@endsection
