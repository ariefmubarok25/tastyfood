<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Kami - Healthy Tasty Food</title>
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
    <header class="fixed w-full bg-transparent z-50 transition-all duration-300" id="navbar">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="text-2xl font-bold text-white">TASTY FOOD</a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-gray-200 font-medium transition duration-300">Home</a>
                    <a href="{{ route('about') }}" class="text-white hover:text-gray-200 font-medium transition duration-300">Tentang</a>
                    <a href="{{ route('news') }}" class="text-white hover:text-gray-200 font-medium transition duration-300">Berita</a>
                    <a href="{{ route('gallery') }}" class="text-white hover:text-gray-200 font-medium transition duration-300">Galeri</a>
                    <a href="{{ route('contact') }}" class="text-white hover:text-gray-200 font-medium transition duration-300">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 pb-4">
                <a href="{{ route('home') }}" class="block text-white hover:text-gray-200 font-medium">Home</a>
                <a href="{{ route('about') }}" class="block text-white hover:text-gray-200 font-medium">Tentang</a>
                <a href="{{ route('news') }}" class="block text-white hover:text-gray-200 font-medium">Berita</a>
                <a href="{{ route('gallery') }}" class="block text-white hover:text-gray-200 font-medium">Galeri</a>
                <a href="{{ route('contact') }}" class="block text-white hover:text-gray-200 font-medium">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[70vh] flex items-end">
        <!-- Background Image dengan Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-orange-600 opacity-90">
            <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-white pb-16 container mx-auto px-4">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide">
                BERITA KAMI
            </h1>
        </div>
    </section>

    <!-- Artikel Utama Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center px-8 py-12">
                <!-- Gambar Artikel Utama -->
                <div class="flex justify-center lg:justify-start">
                    <div class="w-full max-w-lg h-96 bg-gradient-to-br from-green-200 to-blue-200 rounded-2xl shadow-lg flex items-center justify-center">
                        <span class="text-gray-600 text-lg">Gambar Makanan Khas Nusantara</span>
                    </div>
                </div>

                <!-- Konten Artikel Utama -->
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        APA SAJA MAKANAN KHAS NUSANTARA?
                    </h2>

                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>

                    <a href="{{ route('news.show', 1) }}" class="inline-block bg-gray-900 text-white px-8 py-4 rounded-lg font-semibold hover:bg-gray-800 transition duration-300">
                        BACA SELENGKAPNYA
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Lainnya Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">BERITA LAINNYA</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Berita Card 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-yellow-200 to-orange-200 flex items-center justify-center">
                        <span class="text-gray-600">Gambar Berita</span>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">LOREM IPSUM</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="{{ route('news.show', 2) }}" class="text-primary font-semibold hover:text-yellow-600 transition duration-300">
                            Baca selengkapnya
                        </a>
                        <div class="absolute bottom-4 right-6 text-gray-400">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>

                <!-- Berita Card 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-green-200 to-blue-200 flex items-center justify-center">
                        <span class="text-gray-600">Gambar Berita</span>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">LOREM IPSUM</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="{{ route('news.show', 3) }}" class="text-primary font-semibold hover:text-yellow-600 transition duration-300">
                            Baca selengkapnya
                        </a>
                        <div class="absolute bottom-4 right-6 text-gray-400">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>

                <!-- Berita Card 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-purple-200 to-pink-200 flex items-center justify-center">
                        <span class="text-gray-600">Gambar Berita</span>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">LOREM IPSUM</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="{{ route('news.show', 4) }}" class="text-primary font-semibold hover:text-yellow-600 transition duration-300">
                            Baca selengkapnya
                        </a>
                        <div class="absolute bottom-4 right-6 text-gray-400">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>

                <!-- Berita Card 4 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-blue-200 to-cyan-200 flex items-center justify-center">
                        <span class="text-gray-600">Gambar Berita</span>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">LOREM IPSUM</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="{{ route('news.show', 5) }}" class="text-primary font-semibold hover:text-yellow-600 transition duration-300">
                            Baca selengkapnya
                        </a>
                        <div class="absolute bottom-4 right-6 text-gray-400">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>

                <!-- Berita Card 5 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-red-200 to-orange-200 flex items-center justify-center">
                        <span class="text-gray-600">Gambar Berita</span>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">LOREM IPSUM</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="{{ route('news.show', 6) }}" class="text-primary font-semibold hover:text-yellow-600 transition duration-300">
                            Baca selengkapnya
                        </a>
                        <div class="absolute bottom-4 right-6 text-gray-400">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>

                <!-- Berita Card 6 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-indigo-200 to-purple-200 flex items-center justify-center">
                        <span class="text-gray-600">Gambar Berita</span>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">LOREM IPSUM</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="{{ route('news.show', 7) }}" class="text-primary font-semibold hover:text-yellow-600 transition duration-300">
                            Baca selengkapnya
                        </a>
                        <div class="absolute bottom-4 right-6 text-gray-400">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-gray-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-800 transition duration-300">
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

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

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-white', 'shadow-sm');
                // Change logo and text color
                const logo = navbar.querySelector('a');
                const menuItems = navbar.querySelectorAll('a');
                logo.classList.remove('text-white');
                logo.classList.add('text-gray-900');
                menuItems.forEach(item => {
                    if (item !== logo) {
                        item.classList.remove('text-white', 'hover:text-gray-200');
                        item.classList.add('text-gray-700', 'hover:text-gray-900');
                    }
                });
                // Change mobile menu button color
                const menuButton = document.getElementById('mobile-menu-button');
                menuButton.classList.remove('text-white');
                menuButton.classList.add('text-gray-700');
            } else {
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white', 'shadow-sm');
                // Revert logo and text color
                const logo = navbar.querySelector('a');
                const menuItems = navbar.querySelectorAll('a');
                logo.classList.add('text-white');
                logo.classList.remove('text-gray-900');
                menuItems.forEach(item => {
                    if (item !== logo) {
                        item.classList.add('text-white', 'hover:text-gray-200');
                        item.classList.remove('text-gray-700', 'hover:text-gray-900');
                    }
                });
                // Revert mobile menu button color
                const menuButton = document.getElementById('mobile-menu-button');
                menuButton.classList.add('text-white');
                menuButton.classList.remove('text-gray-700');
            }
        });

        // Add hover effects to news cards
        const newsCards = document.querySelectorAll('.bg-white.rounded-2xl');
        newsCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>
