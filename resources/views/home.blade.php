<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Tasty Food - Makanan Sehat & Lezat</title>
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
                        'primary': '#FF6B35',
                        'secondary': '#2D3748',
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

    <!-- Hero Section -->
    <section class="pt-24 pb-16 md:pt-32 md:pb-24">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Text -->
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-light text-gray-800 mb-4">
                        HEALTHY
                        <br>
                        <span class="font-bold text-gray-900">TASTY FOOD</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0">
                        Lorem ipsum dolor sit amet, consectetur dika adipiscing elit. Sed haekal do eiusmod tempor firza incididunt ut labore et pratama dolore magna aliqua.
                    </p>
                    <a href="{{ route('about') }}" class="bg-gray-900 text-white px-8 py-4 rounded-lg font-semibold hover:bg-gray-800 transition duration-300 inline-block">
                        TENTANG KAMI
                    </a>
                </div>

                 <!-- Hero Image -->
                <div class="flex justify-center lg:justify-end">
                    <div class="w-full max-w-md rounded-2xl overflow-hidden">
                        <img src="{{ asset('img-4.png') }}" alt="Healthy Tasty Food"
                             class="w-full h-auto object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">TENTANG KAMI</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </section>

    <!-- Fitur / Kategori Section -->
    <section class="py-16 bg-gray-900 bg-cover bg-center" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 800\"><rect fill=\"%231f2937\" width=\"1200\" height=\"800\"/></svg>')">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Image</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
                    </p>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-100 to-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Image</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
                    </p>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Image</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
                    </p>
                </div>

                <!-- Feature Card 4 -->
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Image</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Kami Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">BERITA KAMI</h2>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main News Card -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-64 bg-gradient-to-br from-green-200 to-blue-200 flex items-center justify-center">
                        <span class="text-gray-600">Featured News Image</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Judul Berita Utama yang Menarik Perhatian</h3>
                        <p class="text-gray-600 mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                        </p>
                        <a href="#" class="text-primary font-semibold hover:text-orange-700 transition duration-300">
                            Baca selengkapnya →
                        </a>
                    </div>
                </div>

                <!-- Side News Cards -->
                <div class="space-y-6">
                    <!-- News Card 1 -->
                    <div class="bg-white rounded-xl shadow-sm p-4 hover:shadow-md transition duration-300">
                        <div class="h-32 bg-gradient-to-br from-yellow-100 to-orange-100 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">News Image</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Tips Makan Sehat Harian</h4>
                        <p class="text-gray-600 text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold hover:text-orange-700">Baca selengkapnya</a>
                    </div>

                    <!-- News Card 2 -->
                    <div class="bg-white rounded-xl shadow-sm p-4 hover:shadow-md transition duration-300">
                        <div class="h-32 bg-gradient-to-br from-green-100 to-blue-100 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">News Image</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Resep Salad Segar</h4>
                        <p class="text-gray-600 text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold hover:text-orange-700">Baca selengkapnya</a>
                    </div>

                    <!-- News Card 3 -->
                    <div class="bg-white rounded-xl shadow-sm p-4 hover:shadow-md transition duration-300">
                        <div class="h-32 bg-gradient-to-br from-purple-100 to-pink-100 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">News Image</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Manfaat Organic Food</h4>
                        <p class="text-gray-600 text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold hover:text-orange-700">Baca selengkapnya</a>
                    </div>

                    <!-- News Card 4 -->
                    <div class="bg-white rounded-xl shadow-sm p-4 hover:shadow-md transition duration-300">
                        <div class="h-32 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">News Image</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Trend Makanan 2025</h4>
                        <p class="text-gray-600 text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold hover:text-orange-700">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Kami Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">GALERI KAMI</h2>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                <!-- Gallery Image 1 -->
                <div class="aspect-square bg-gradient-to-br from-green-200 to-blue-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-600">Food Image 1</span>
                </div>
                <!-- Gallery Image 2 -->
                <div class="aspect-square bg-gradient-to-br from-yellow-200 to-orange-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-600">Food Image 2</span>
                </div>
                <!-- Gallery Image 3 -->
                <div class="aspect-square bg-gradient-to-br from-purple-200 to-pink-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-600">Food Image 3</span>
                </div>
                <!-- Gallery Image 4 -->
                <div class="aspect-square bg-gradient-to-br from-blue-200 to-cyan-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-600">Food Image 4</span>
                </div>
                <!-- Gallery Image 5 -->
                <div class="aspect-square bg-gradient-to-br from-red-200 to-pink-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-600">Food Image 5</span>
                </div>
                <!-- Gallery Image 6 -->
                <div class="aspect-square bg-gradient-to-br from-indigo-200 to-purple-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-600">Food Image 6</span>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('gallery') }}" class="bg-gray-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-800 transition duration-300 inline-block">
                    LIHAT LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Column 1 - Logo & Description -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">Tasty Food</h3>
                    <p class="text-gray-400 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
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
                            <span class="text-gray-400">info@tastyfood.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-gray-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">+62 123 4567 890</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-6 text-center">
                <p class="text-gray-400 text-sm">
                    © 2025 Tasty Food. All rights reserved.
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
