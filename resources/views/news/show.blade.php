<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }} - Healthy Tasty Food</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#FBC02D',
                        'secondary': '#2D3748',
                        'accent': '#FF6B35',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter bg-white">
    <!-- Header / Navbar -->
    <header class="fixed w-full bg-white shadow-sm z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-900">TASTY FOOD</a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900 font-medium transition duration-300">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-900 font-medium transition duration-300">Tentang</a>
                    <a href="{{ route('news') }}" class="text-gray-700 hover:text-gray-900 font-medium transition duration-300">Berita</a>
                    <a href="{{ route('gallery') }}" class="text-gray-700 hover:text-gray-900 font-medium transition duration-300">Galeri</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-900 font-medium transition duration-300">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 pb-4">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-gray-900 font-medium">Home</a>
                <a href="{{ route('about') }}" class="block text-gray-700 hover:text-gray-900 font-medium">Tentang</a>
                <a href="{{ route('news') }}" class="block text-gray-700 hover:text-gray-900 font-medium">Berita</a>
                <a href="{{ route('gallery') }}" class="block text-gray-700 hover:text-gray-900 font-medium">Galeri</a>
                <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-gray-900 font-medium">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <main class="pt-24 pb-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                <!-- Featured Image -->
                @if($news->image)
                <div class="h-96 overflow-hidden">
                    <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" class="w-full h-full object-cover">
                </div>
                @else
                <div class="h-64 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                    <span class="text-gray-500 text-lg">No Image Available</span>
                </div>
                @endif

                <!-- Article Content -->
                <div class="p-8">
                    <!-- Metadata -->
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <span class="bg-primary text-white px-3 py-1 rounded-full font-semibold text-xs">
                            {{ $news->published_at ? $news->published_at->format('d M Y') : $news->created_at->format('d M Y') }}
                        </span>
                        <span class="mx-3 text-gray-400">•</span>
                        <span class="text-gray-500">
                            @php
                                $wordCount = str_word_count(strip_tags($news->content));
                                $readingTime = ceil($wordCount / 200);
                            @endphp
                            {{ $readingTime }} menit membaca
                        </span>
                    </div>

                    <!-- Title -->
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        {{ $news->title }}
                    </h1>

                    <!-- Excerpt -->
                    @if($news->excerpt)
                    <div class="bg-gray-50 border-l-4 border-primary p-4 mb-6">
                        <p class="text-gray-700 italic">{{ $news->excerpt }}</p>
                    </div>
                    @endif

                    <!-- Content -->
                    <div class="prose max-w-none text-gray-700 leading-relaxed text-lg">
                        {!! nl2br(e($news->content)) !!}
                    </div>

                    <!-- Back Button -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <a href="{{ route('news') }}" class="inline-flex items-center text-primary font-semibold hover:text-yellow-600 transition duration-300">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Column 1 - Tasty Food -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">Tasty Food</h3>
                    <p class="text-gray-400 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- Column 2 - Useful Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Useful Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Hewan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Galeri</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Testimonial</a></li>
                    </ul>
                </div>

                <!-- Column 3 - Privacy -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Privacy</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Karir</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kontak Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Servis</a></li>
                    </ul>
                </div>

                <!-- Column 4 - Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-gray-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">tastyfood@gmail.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-gray-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">Kota Bandung, Jawa Barat</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-6 text-center">
                <p class="text-gray-400 text-sm">
                    Copyright ©2023 All rights reserved
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
