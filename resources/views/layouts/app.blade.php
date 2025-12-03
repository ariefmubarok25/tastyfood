<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tasty Food')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts & Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
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

    <!-- ================= NAVBAR ================= -->
    <header class="fixed w-full bg-transparent z-50 transition-all duration-300" id="navbar">
        <nav class="w-full px-6 py-4">
            <div class="flex items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="text-2xl font-bold text-white">TASTY FOOD</a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 ml-auto">
                    <a href="{{ route('home') }}" class="text-white hover:text-gray-200 font-medium transition">Home</a>
                    <a href="{{ route('about') }}" class="text-white hover:text-gray-200 font-medium transition">Tentang</a>
                    <a href="{{ route('news') }}" class="text-white hover:text-gray-200 font-medium transition">Berita</a>
                    <a href="{{ route('gallery') }}" class="text-white hover:text-gray-200 font-medium transition">Galeri</a>
                    <a href="{{ route('contact') }}" class="text-white hover:text-gray-200 font-medium transition">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden ml-auto">
                    <button id="mobile-menu-button" class="text-white">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 pb-4">
                <a href="{{ route('home') }}" class="block text-white">Home</a>
                <a href="{{ route('about') }}" class="block text-white">Tentang</a>
                <a href="{{ route('news') }}" class="block text-white">Berita</a>
                <a href="{{ route('gallery') }}" class="block text-white">Galeri</a>
                <a href="{{ route('contact') }}" class="block text-white">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- ================= MAIN CONTENT ================= -->
    <main>
        @yield('content')
    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-gray-900 text-white pt-12 pb-8 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">

                <div>
                    <h3 class="text-2xl font-bold mb-4">Tasty Food</h3>
                    <p class="text-gray-400 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Useful Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Hewan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Galeri</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Testimonial</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Privacy</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Karir</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kontak Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Servis</a></li>
                    </ul>
                </div>

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

            <div class="border-t border-gray-800 pt-6 text-center">
                <p class="text-gray-400 text-sm">
                    © 2025 Tasty Food. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- ================= SCRIPTS ================= -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            const logo = navbar.querySelector('a');
            const menuItems = navbar.querySelectorAll('a');
            const btn = document.getElementById('mobile-menu-button');

            if (window.scrollY > 100) {
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-white', 'shadow-sm');

                logo.classList.remove('text-white');
                logo.classList.add('text-gray-900');

                menuItems.forEach(item => {
                    item.classList.remove('text-white');
                    item.classList.add('text-gray-700');
                });

                btn.classList.remove('text-white');
                btn.classList.add('text-gray-700');
            } else {

                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white', 'shadow-sm');

                logo.classList.add('text-white');
                logo.classList.remove('text-gray-900');

                menuItems.forEach(item => {
                    item.classList.add('text-white');
                    item.classList.remove('text-gray-700');
                });

                btn.classList.add('text-white');
                btn.classList.remove('text-gray-700');
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
