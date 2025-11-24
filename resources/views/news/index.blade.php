<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Kami - Healthy Tasty Food</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header */
        header {
            background-color: #fff;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: #333;
            text-decoration: none;
        }

        nav a:hover {
            color: #666;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 10px;
            padding: 15px 0;
            border-top: 1px solid #ddd;
        }

        .mobile-menu a {
            color: #333;
            text-decoration: none;
            padding: 5px 0;
        }

        /* Hero Section */
        .hero {
            background-color: #f5f5f5;
            padding: 120px 0 60px;
            text-align: center;
            margin-top: 60px;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        /* Featured News */
        .featured-news {
            padding: 40px 0;
            background-color: #fff;
        }

        .featured-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
            align-items: center;
        }

        @media (min-width: 768px) {
            .featured-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .featured-image {
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .featured-content {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .featured-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .news-date {
            color: #666;
            font-size: 0.9rem;
        }

        .news-excerpt {
            color: #666;
            line-height: 1.6;
        }

        .read-more {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            width: fit-content;
        }

        .read-more:hover {
            background-color: #555;
        }

        /* Other News */
        .other-news {
            padding: 40px 0;
            background-color: #f9f9f9;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .news-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media (min-width: 768px) {
            .news-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (min-width: 992px) {
            .news-grid {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        .news-card {
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .news-card-image {
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        .news-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-card-content {
            padding: 15px;
        }

        .news-card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .news-card-excerpt {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .news-card-link {
            color: #333;
            font-weight: bold;
            text-decoration: none;
        }

        .news-card-link:hover {
            color: #666;
        }

        /* Utility Classes */
        .text-center {
            text-align: center;
        }

        .mt-4 {
            margin-top: 20px;
        }

        .hidden {
            display: none;
        }

        /* Responsive */
        @media (max-width: 767px) {
            .desktop-nav {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-title {
                font-size: 2rem;
            }

            .featured-title {
                font-size: 1.5rem;
            }

            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header / Navbar -->
    <header>
        <div class="container header-container">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">tasty food</a>

            <!-- Desktop Menu -->
            <nav class="desktop-nav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">Tentang</a>
                <a href="{{ route('news') }}">Berita</a>
                <a href="{{ route('gallery') }}">Galeri</a>
                <a href="{{ route('contact') }}">Kontak</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" id="mobile-menu-button">
                ☰
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="container">
            <div class="mobile-menu hidden" id="mobile-menu">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">Tentang</a>
                <a href="{{ route('news') }}">Berita</a>
                <a href="{{ route('gallery') }}">Galeri</a>
                <a href="{{ route('contact') }}">Kontak</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="hero-title">
                berita kami
            </h1>
        </div>
    </section>

    <!-- Artikel Utama Section -->
    @if($featuredNews)
    <section class="featured-news">
        <div class="container">
            <div class="featured-grid">
                <!-- Gambar Artikel Utama -->
                <div class="featured-image">
                    @if($featuredNews->image)
                        <img src="{{ asset('storage/news/' . $featuredNews->image) }}" alt="{{ $featuredNews->title }}">
                    @else
                        <div style="width:100%;height:100%;background:#e9ecef;display:flex;align-items:center;justify-content:center;">
                            <span style="color:#666;">No Image Available</span>
                        </div>
                    @endif
                </div>

                <!-- Konten Artikel Utama -->
                <div class="featured-content">
                    <h2 class="featured-title">
                        {{ $featuredNews->title }}
                    </h2>

                    <div>
                        <p class="news-date">
                            Dipublikasikan pada: {{ $featuredNews->published_at ? $featuredNews->published_at->format('d M Y') : $featuredNews->created_at->format('d M Y') }}
                        </p>
                        <p class="news-excerpt">
                            {{ $featuredNews->excerpt ?? Str::limit(strip_tags($featuredNews->content), 300) }}
                        </p>
                    </div>

                    <a href="{{ route('news.show', $featuredNews->id) }}" class="read-more">
                        BACA SELENGKAPNYA
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Berita Lainnya Section -->
    <section class="other-news">
        <div class="container">
            <h2 class="section-title">berita lainnya</h2>

            @if($news->count() > 0)
            <div class="news-grid">
                @foreach($news as $item)
                <div class="news-card">
                    <div class="news-card-image">
                        @if($item->image)
                            <img src="{{ asset('storage/news/' . $item->image) }}" alt="{{ $item->title }}">
                        @else
                            <div style="width:100%;height:100%;background:#e9ecef;display:flex;align-items:center;justify-content:center;">
                                <span style="color:#666;font-size:0.8rem;">No Image</span>
                            </div>
                        @endif
                    </div>
                    <div class="news-card-content">
                        <h3 class="news-card-title">{{ $item->title }}</h3>
                        <p class="news-date">
                            {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}
                        </p>
                        <p class="news-card-excerpt">
                            {{ $item->excerpt ?? Str::limit(strip_tags($item->content), 120) }}
                        </p>
                        <a href="{{ route('news.show', $item->id) }}" class="news-card-link">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($news->hasPages())
            <div class="mt-4 text-center">
                {{ $news->links() }}
            </div>
            @endif

            @else
            <div class="text-center">
                <p style="color:#666;">Belum ada berita lainnya.</p>
            </div>
            @endif
        </div>
    </section>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
