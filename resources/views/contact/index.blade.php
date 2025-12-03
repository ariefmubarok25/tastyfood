@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')

<!-- Hero Section -->
<section class="relative h-[70vh] flex items-center justify-center">
    <div class="absolute inset-0">
        <img src="{{ asset('monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" 
             alt="Kontak Kami Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <div class="relative z-10 text-center text-white">
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide">
            KONTAK KAMI
        </h1>
    </div>
</section>

<!-- Formulir Kontak -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12 uppercase">KONTAK KAMI</h2>

        <form action="{{ route('contact.store') }}" method="POST" class="max-w-4xl mx-auto">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                
                <!-- Kolom Kiri -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <input type="text" name="subject" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 transition duration-300"
                               placeholder="Masukkan subject pesan">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                        <input type="text" name="name" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 transition duration-300"
                               placeholder="Masukkan nama lengkap">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 transition duration-300"
                               placeholder="Masukkan alamat email">
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                    <textarea name="message" rows="10" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 transition duration-300"
                              placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>

            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-gray-900 text-white px-12 py-4 rounded-lg font-semibold hover:bg-gray-800 transition duration-300 w-full lg:w-auto">
                    KIRIM
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Info Kontak -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <div class="text-center">
                <div class="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2 uppercase">EMAIL</h3>
                <p class="text-gray-600">tastyfood@gmail.com</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2 uppercase">PHONE</h3>
                <p class="text-gray-600">+62 812 3456 7890</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2 uppercase">LOCATION</h3>
                <p class="text-gray-600">Kota Bandung, Jawa Barat</p>
            </div>

        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto rounded-2xl overflow-hidden shadow-lg">

            @if ($setting && $setting->map_embed_link)
                <iframe src="{{ $setting->map_embed_link }}"
                        width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            @else
                <div class="p-6 bg-gray-100 text-center text-gray-600">
                    Belum ada lokasi yang disetting.
                </div>
            @endif

        </div>
    </div>
</section>

@endsection
