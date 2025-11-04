@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-12">Galeri Foto</h1>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @for($i = 1; $i <= 12; $i++)
        <div class="bg-gray-300 rounded-lg overflow-hidden aspect-square hover:scale-105 transition duration-300 cursor-pointer">
            <!-- Placeholder for images -->
            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                <span class="text-white font-semibold">Foto {{$i}}</span>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
