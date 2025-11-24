<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }} - Healthy Tasty Food</title>
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

        /* Main Content */
        main {
            padding: 100px 0 40px;
        }

        .article-container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border: 1px solid #ddd;
        }

        .article-image {
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .no-image {
            width: 100%;
            height: 200px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }

        .article-content {
            padding: 30px;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            color: #666;
        }

        .date-badge {
            background: #333;
            color: #fff;
            padding: 5px 10px;
            font-weight: bold;
        }

        .article-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .article-excerpt {
            background: #f9f9f9;
            border-left: 3px solid #333;
            padding: 15px;
            margin-bottom: 20px;
            color: #666;
            font-style: italic;
        }

        .article-body {
            color: #444;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .article-body p {
            margin-bottom: 15px;
        }

        .back-button {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .back-link {
            color: #333;
            font-weight: bold;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .back-link:hover {
            color: #666;
        }

        /* Utility Classes */
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

            .article-title {
                font-size: 1.5rem;
            }

            .article-content {
                padding: 20px;
            }

            .article-image {
                height: 250px;
            }
        }

        @media (max-width: 480px) {
            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
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

    <!-- Content -->
    <main>
        <div class="container">
            <article class="article-container">
                <!-- Featured Image -->
                @if($news->image)
                <div class="article-image">
                    <img src="{{ asset('storage/news/' . $news->image) }}" alt="{{ $news->title }}">
                </div>
                @else
                <div class="no-image">
                    <span>No Image Available</span>
                </div>
                @endif

                <!-- Article Content -->
                <div class="article-content">
                    <!-- Metadata -->
                    <div class="article-meta">
                        <span class="date-badge">
                            {{ $news->published_at ? $news->published_at->format('d M Y') : $news->created_at->format('d M Y') }}
                        </span>
                        <span>•</span>
                        <span>
                            @php
                                $wordCount = str_word_count(strip_tags($news->content));
                                $readingTime = ceil($wordCount / 200);
                            @endphp
                            {{ $readingTime }} menit membaca
                        </span>
                    </div>

                    <!-- Title -->
                    <h1 class="article-title">
                        {{ $news->title }}
                    </h1>

                    <!-- Excerpt -->
                    @if($news->excerpt)
                    <div class="article-excerpt">
                        {{ $news->excerpt }}
                    </div>
                    @endif

                    <!-- Content -->
                    <div class="article-body">
                        {!! nl2br(e($news->content)) !!}
                    </div>

                    <!-- Back Button -->
                    <div class="back-button">
                        <a href="{{ route('news') }}" class="back-link">
                            ← Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
