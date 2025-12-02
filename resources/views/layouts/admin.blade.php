<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Admin Header -->
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold">Admin Panel</a>

                    <nav class="hidden md:flex space-x-4">
                        <a href="{{ route('admin.dashboard') }}" class="hover:bg-blue-700 px-3 py-1 rounded">Dashboard</a>

                        <a href="{{ route('admin.news') }}" class="hover:bg-blue-700 px-3 py-1 rounded">Berita</a>

                        <a href="{{ route('admin.gallery') }}" class="hover:bg-blue-700 px-3 py-1 rounded">Galeri</a>

                        <a href="{{ route('admin.location.index') }}" class="hover:bg-blue-700 px-3 py-1 rounded">Lokasi</a>

                        <!-- MENU PESAN (BARU DITAMBAHKAN) -->
                        <a href="{{ route('admin.contacts') }}" class="hover:bg-blue-700 px-3 py-1 rounded">Pesan</a>
                    </nav>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="hover:bg-blue-700 px-3 py-1 rounded" target="_blank">
                        <i class="fas fa-external-link-alt mr-2"></i>Lihat Website
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>
</body>
</html>
