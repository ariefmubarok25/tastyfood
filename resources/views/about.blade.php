<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Healthy Tasty Food</title>
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
    <section class="relative h-[70vh] flex items-center justify-center">
        <!-- Background Image dengan Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="Tasty Food Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide">
                TENTANG KAMI
            </h1>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">TASTY FOOD</h2>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                        </p>
                    </div>
                </div>

                <!-- Images Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="aspect-square rounded-2xl shadow-md overflow-hidden">
                        <img src="{{ asset('brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Food Image 1" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="aspect-square rounded-2xl shadow-md overflow-hidden">
                        <img src="{{ asset('sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="Food Image 2" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Images Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="aspect-square rounded-2xl shadow-md overflow-hidden">
                        <img src="{{ asset('fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Food Image 3" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="aspect-square rounded-2xl shadow-md overflow-hidden">
                        <img src="{{ asset('michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" alt="Food Image 4" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                </div>

                <!-- Text Content -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">VISI</h2>
                    <div class="space-y-4">
                        <p class="text-gray-600 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Misi Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">MISI</h2>
                    <div class="space-y-4">
                        <p class="text-gray-600 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                            ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                        </p>
                    </div>
                </div>

                <!-- Single Large Image -->
                <div>
                    <div class="aspect-[4/3] rounded-2xl shadow-lg overflow-hidden">
                        <img src="{{ asset('sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="Featured Food Image" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                </div>
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
    </script>
</body>
</html>
