<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kami - Healthy Tasty Food</title>
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
        <div class="absolute inset-0">
            <img src="{{ asset('monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="Galeri Kami Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-white pb-16 container mx-auto px-4">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide">
                GALERI KAMI
            </h1>
        </div>
    </section>

    <!-- Carousel Gambar Utama -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="relative max-w-6xl mx-auto">
                <!-- Carousel Container -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="w-full flex-shrink-0">
                            <div class="h-96 overflow-hidden">
                                <img src="{{ asset('fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Makanan Unggulan 1" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="w-full flex-shrink-0">
                            <div class="h-96 overflow-hidden">
                                <img src="{{ asset('eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="Makanan Unggulan 2" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="w-full flex-shrink-0">
                            <div class="h-96 overflow-hidden">
                                <img src="{{ asset('brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Makanan Unggulan 3" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-black/30 hover:bg-black/50 text-white rounded-full flex items-center justify-center transition duration-300 backdrop-blur-sm">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-black/30 hover:bg-black/50 text-white rounded-full flex items-center justify-center transition duration-300 backdrop-blur-sm">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Indicators -->
                    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                        <button class="carousel-indicator w-3 h-3 bg-white/50 rounded-full hover:bg-white transition duration-300" data-slide="0"></button>
                        <button class="carousel-indicator w-3 h-3 bg-white/50 rounded-full hover:bg-white transition duration-300" data-slide="1"></button>
                        <button class="carousel-indicator w-3 h-3 bg-white/50 rounded-full hover:bg-white transition duration-300" data-slide="2"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid Galeri -->
    <section class="py-12 px-10 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gambar 1 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="Salad Segar" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 2 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" alt="Dessert Lezat" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 3 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" alt="Makanan Utama" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 4 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" alt="Minuman Sehat" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 5 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="Chef Memasak" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 6 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" alt="Bahan Organik" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 7 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('jonathan-borba-Gkc_xM3VY34-unsplash.jpg') }}" alt="Menu Spesial" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 8 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg') }}" alt="Sarapan Sehat" class="w-full h-full object-cover">
                </div>
                <!-- Gambar 9 -->
                <div class="aspect-square rounded-2xl shadow-md hover:shadow-xl transition duration-300 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="Makanan Penutup" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white pt-12 pb-8">
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

        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('#carousel > div');
        const totalSlides = slides.length;
        const carousel = document.getElementById('carousel');
        const indicators = document.querySelectorAll('.carousel-indicator');

        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentSlide * 100}%)`;

            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.remove('bg-white/50');
                    indicator.classList.add('bg-white');
                } else {
                    indicator.classList.remove('bg-white');
                    indicator.classList.add('bg-white/50');
                }
            });
        }

        // Next button
        document.getElementById('nextBtn').addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        });

        // Previous button
        document.getElementById('prevBtn').addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });

        // Indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function() {
                currentSlide = index;
                updateCarousel();
            });
        });

        // Auto slide every 5 seconds
        setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }, 5000);

        // Add hover effects to gallery images
        const galleryImages = document.querySelectorAll('.aspect-square');
        galleryImages.forEach(image => {
            image.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });

            image.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>
