<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Berita</title>
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
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        .page-title h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .page-title p {
            color: #666;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        /* Notifications */
        .alert {
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
        }

        .alert-success {
            background: #d1fae5;
            border-color: #a7f3d0;
            color: #065f46;
        }

        .alert-error {
            background: #fee2e2;
            border-color: #fecaca;
            color: #991b1b;
        }

        /* Table */
        .table-container {
            background: white;
            border: 1px solid #ddd;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f9fafb;
            padding: 12px 15px;
            text-align: left;
            font-weight: bold;
            color: #666;
            border-bottom: 1px solid #ddd;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #f9fafb;
        }

        /* Image */
        .news-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .no-image {
            width: 60px;
            height: 60px;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
        }

        /* Status Badge */
        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .status-published {
            background: #d1fae5;
            color: #065f46;
        }

        .status-draft {
            background: #fef3c7;
            color: #92400e;
        }

        /* Actions */
        .action-links {
            display: flex;
            gap: 15px;
        }

        .action-link {
            color: #2563eb;
            text-decoration: none;
        }

        .action-link:hover {
            text-decoration: underline;
        }

        .delete-btn {
            color: #dc2626;
            background: none;
            border: none;
            cursor: pointer;
        }

        .delete-btn:hover {
            text-decoration: underline;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #666;
        }

        .empty-state p {
            margin-top: 10px;
        }

        /* Pagination */
        .pagination {
            margin-top: 20px;
            text-align: right;
            color: #666;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            th, td {
                padding: 8px 10px;
            }

            .action-links {
                flex-direction: column;
                gap: 5px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .page-title h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="page-header">
            <div class="page-title">
                <h1>Management Berita</h1>
                <p>Kelola berita dan artikel website</p>
            </div>
            <a href="{{ route('admin.news.create') }}" class="btn">
                + Tambah Berita
            </a>
        </div>

        <!-- Notifications -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
        @endif

        <!-- Table -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($news as $item)
                    <tr>
                        <td>
                            @if($item->image)
                                <img src="{{ asset('storage/news/' . $item->image) }}" alt="{{ $item->title }}" class="news-image">
                            @else
                                <div class="no-image">
                                    [No Image]
                                </div>
                            @endif
                        </td>
                        <td>
                            <div style="font-weight: bold; margin-bottom: 5px;">{{ $item->title }}</div>
                            <div style="color: #666; font-size: 0.9rem;">
                                {{ Str::limit(strip_tags($item->excerpt), 100) }}
                            </div>
                        </td>
                        <td>
                            <span class="status-badge {{ $item->status == 'published' ? 'status-published' : 'status-draft' }}">
                                {{ $item->status == 'published' ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td style="color: #666;">
                            {{ $item->created_at->format('d M Y') }}
                        </td>
                        <td>
                            <div class="action-links">
                                <a href="{{ route('admin.news.edit', $item->id) }}" class="action-link">
                                    Edit
                                </a>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <div class="empty-state">
                                <div style="font-size: 3rem; color: #d1d5db; margin-bottom: 10px;">📰</div>
                                <p>Belum ada berita yang ditambahkan.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($news->count() > 0)
        <div class="pagination">
            Menampilkan {{ $news->count() }} berita
        </div>
        @endif
    </div>

    <script>
        // Konfirmasi penghapusan
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
