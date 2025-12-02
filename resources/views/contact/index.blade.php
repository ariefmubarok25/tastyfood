<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Healthy Tasty Food</title>
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
            <img src="{{ asset('monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="Kontak Kami Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide">
                KONTAK KAMI
            </h1>
        </div>
    </section>

    <!-- Formulir Kontak Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12 uppercase">KONTAK KAMI</h2>

            <form action="{{ route('contact.store') }}" method="POST" class="max-w-4xl mx-auto">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                    <!-- Kolom Kiri -->
                    <div class="space-y-6">
                        <!-- Subject Input -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 focus:border-gray-900 transition duration-300"
                                placeholder="Masukkan subject pesan">
                        </div>

                        <!-- Name Input -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 focus:border-gray-900 transition duration-300"
                                placeholder="Masukkan nama lengkap">
                        </div>

                        <!-- Email Input -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 focus:border-gray-900 transition duration-300"
                                placeholder="Masukkan alamat email">
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="10" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 focus:border-gray-900 transition duration-300"
                                placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                            class="bg-gray-900 text-white px-12 py-4 rounded-lg font-semibold hover:bg-gray-800 transition duration-300 w-full lg:w-auto">
                        KIRIM
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Info Kontak Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Email -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 uppercase">EMAIL</h3>
                    <p class="text-gray-600">tastyfood@gmail.com</p>
                </div>

                <!-- Phone -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 uppercase">PHONE</h3>
                    <p class="text-gray-600">+62 812 3456 7890</p>
                </div>

                <!-- Location -->
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
<!-- Map Section -->
<!-- Map Section -->

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="rounded-2xl overflow-hidden shadow-lg">

            @if ($setting && $setting->map_embed_link)
                <iframe
                    src="{{ $setting->map_embed_link }}"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            @else
                <div class="p-6 bg-gray-100 text-center text-gray-600">
                    Belum ada lokasi yang disetting.
                </div>
            @endif

        </div>
    </div>
</div>
```

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

        // Form validation and interaction
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, textarea');

        inputs.forEach(input => {
            // Add focus effect
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-gray-900');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-gray-900');
            });
        });

    </script>
</body>
</html>
