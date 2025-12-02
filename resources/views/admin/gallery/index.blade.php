@extends('layouts.admin')

@section('title', 'Management Galeri')

@section('content')

<div class="mb-8">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Management Galeri</h1>
            <p class="text-gray-600">Kelola gambar galeri website</p>
        </div>

        <a href="{{ route('admin.gallery.create') }}"
           class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            + Tambah Gambar
        </a>
    </div>
</div>

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
                        Gambar
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Judul / Alt
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($galleries as $item)
                <tr class="hover:bg-gray-50">

                    {{-- Gambar --}}
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($item->image)
                            <img src="{{ asset('storage/gallery/' . $item->image) }}"
                                 alt="{{ $item->title }}"
                                 class="w-16 h-16 object-cover rounded">
                        @else
                            <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center text-gray-400">
                                Tidak ada gambar
                            </div>
                        @endif
                    </td>

                    {{-- Judul --}}
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-gray-900">{{ $item->title }}</div>
                        <div class="text-sm text-gray-500">Alt: {{ $item->image_alt ?? '-' }}</div>
                    </td>

                    {{-- Aksi --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-3">
                            <a href="{{ route('admin.gallery.edit', $item->id) }}"
                               class="text-blue-600 hover:text-blue-900">
                                Edit
                            </a>

                            <form action="{{ route('admin.gallery.destroy', $item->id) }}"
                                  method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus gambar ini?')"
                                        class="text-red-600 hover:text-red-900">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                        Belum ada gambar galeri.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($galleries->count() > 0)
<div class="mt-6 text-sm text-gray-700">
    Menampilkan {{ $galleries->count() }} gambar
</div>
@endif

@endsection
