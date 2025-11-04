@extends('layouts.admin')

@section('title', 'Detail Pesan')

@section('content')
<div class="mb-8">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Detail Pesan</h1>
            <p class="text-gray-600">Lihat detail pesan dari pengunjung</p>
        </div>
        <a href="{{ route('admin.contact') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <!-- Message Header -->
    <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
        <div class="flex justify-between items-start">
            <div class="flex items-center">
                <div class="flex-shrink-0 h-12 w-12 bg-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold text-lg">
                        {{ strtoupper(substr($message['name'], 0, 1)) }}
                    </span>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-900">{{ $message['name'] }}</h2>
                    <p class="text-gray-600">{{ $message['email'] }}</p>
                </div>
            </div>
            <div class="text-right">
                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full
                    {{ !$message['read'] ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                    {{ !$message['read'] ? 'Pesan Baru' : 'Sudah Dibaca' }}
                </span>
                <p class="text-sm text-gray-500 mt-1">
                    {{ \Carbon\Carbon::parse($message['created_at'])->format('d M Y, H:i') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Message Content -->
    <div class="px-6 py-8">
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Subjek Pesan</h3>
            <p class="text-gray-700 bg-gray-50 p-4 rounded-lg">{{ $message['subject'] }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Isi Pesan</h3>
            <div class="bg-gray-50 p-6 rounded-lg">
                <p class="text-gray-700 whitespace-pre-line leading-relaxed">{{ $message['message'] }}</p>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
        <div class="flex justify-between items-center">
            <div class="text-sm text-gray-500">
                ID Pesan: #{{ $message['id'] }}
            </div>
            <div class="flex space-x-3">
                <!-- Reply Button (placeholder) -->
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                    <i class="fas fa-reply mr-2"></i>Balas
                </button>

                <!-- Delete Button -->
                <form action="{{ route('admin.contact.destroy', $message['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                        <i class="fas fa-trash mr-2"></i>Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Tindakan Cepat</h3>
        <div class="space-y-3">
            <button class="w-full text-left px-4 py-3 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition duration-300">
                <i class="fas fa-envelope mr-2"></i>Tambahkan ke daftar newsletter
            </button>
            <button class="w-full text-left px-4 py-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition duration-300">
                <i class="fas fa-user-plus mr-2"></i>Tambahkan ke kontak
            </button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Pengirim</h3>
        <div class="space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-600">Nama:</span>
                <span class="font-medium">{{ $message['name'] }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Email:</span>
                <span class="font-medium">{{ $message['email'] }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Tanggal Kirim:</span>
                <span class="font-medium">{{ \Carbon\Carbon::parse($message['created_at'])->format('d M Y H:i') }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
