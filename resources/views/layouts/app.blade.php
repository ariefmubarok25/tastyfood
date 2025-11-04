<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Kami')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">Logo</a>

                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('about') ? 'text-blue-600 font-semibold' : '' }}">Tentang</a>
                    <a href="{{ route('news') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('news*') ? 'text-blue-600 font-semibold' : '' }}">Berita</a>
                    <a href="{{ route('gallery') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('gallery') ? 'text-blue-600 font-semibold' : '' }}">Galeri</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('contact') ? 'text-blue-600 font-semibold' : '' }}">Kontak</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ route('about') }}" class="block text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="{{ route('news') }}" class="block text-gray-700 hover:text-blue-600">Berita</a>
                <a href="{{ route('gallery') }}" class="block text-gray-700 hover:text-blue-600">Galeri</a>
                <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-blue-600">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3>
                    <p class="text-gray-300">Deskripsi singkat tentang perusahaan atau website Anda.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Link Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white">Tentang</a></li>
                        <li><a href="{{ route('news') }}" class="text-gray-300 hover:text-white">Berita</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <p class="text-gray-300">Email: info@example.com</p>
                    <p class="text-gray-300">Phone: (021) 123-4567</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-300">
                <p>&copy; 2024 Website Kami. All rights reserved.</p>
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
