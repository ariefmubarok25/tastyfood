<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Tasty Food</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
        }

        /* Header */
        header {
            position: fixed;
            width: 100%;
            background: transparent;
            z-index: 100;
            padding: 16px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .desktop-menu {
            display: none;
        }

        .desktop-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            margin-left: 32px;
            transition: color 0.3s;
        }

        .desktop-menu a:hover {
            color: #d1d5db;
        }

        .mobile-menu-btn {
            color: white;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 70vh;
            display: flex;
            align-items: flex-end;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 10;
            color: white;
            padding-bottom: 64px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            padding-left: 16px;
            padding-right: 16px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Gallery Section */
        .gallery-section {
            padding: 48px 40px;
            background: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .gallery-item {
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .gallery-item:hover {
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* Media Queries */
        @media (min-width: 768px) {
            .desktop-menu {
                display: flex;
            }

            .mobile-menu-btn {
                display: none;
            }

            .hero-title {
                font-size: 60px;
            }

            .gallery-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (min-width: 1024px) {
            .hero-title {
                font-size: 72px;
            }

            .gallery-grid {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-container">
                <a href="{{ route('home') }}" class="logo">TASTY FOOD</a>

                <div class="desktop-menu">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">Tentang</a>
                    <a href="{{ route('news') }}">Berita</a>
                    <a href="{{ route('gallery') }}">Galeri</a>
                    <a href="{{ route('contact') }}">Kontak</a>
                </div>

                <div class="mobile-menu">
                    <button class="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-bg">
            <img src="{{ asset('masukangambarkamu.jpg') }}" alt="Galeri Kami Background">
            <div class="hero-overlay"></div>
        </div>

        <div class="hero-content">
            <h1 class="hero-title">GALERI KAMI</h1>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                @foreach($galleryImages as $image)
                <div class="gallery-item">
                    <img src="{{ asset('storage/gallery/' . $image->image) }}"
                         alt="{{ $image->title }}">
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>


