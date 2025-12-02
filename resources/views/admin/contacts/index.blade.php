@extends('layouts.admin')

@section('title', 'Daftar Pesan Kontak')

@section('content')

<h1 class="text-3xl font-bold mb-6">Pesan Masuk</h1>

@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Subjek</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @forelse($contacts as $contact)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">{{ $contact->name }}</td>
                <td class="px-6 py-4">{{ $contact->email }}</td>
                <td class="px-6 py-4">{{ $contact->subject }}</td>

                <td class="px-6 py-4 whitespace-nowrap">

                    <a href="{{ route('admin.contacts.show', $contact->id) }}"
                       class="text-blue-600 hover:text-blue-900 mr-4">
                        Lihat
                    </a>

                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus pesan ini?')"
                                class="text-red-600 hover:text-red-900">
                            Hapus
                        </button>
                    </form>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                    Belum ada pesan masuk.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
