<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
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
            max-width: 800px;
            margin: 0 auto;
        }

        /* Header */
        .page-header {
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .page-header p {
            color: #666;
        }

        /* Form */
        .form-container {
            background: white;
            border: 1px solid #ddd;
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        .required {
            color: #dc2626;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            font-family: Arial, sans-serif;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 200px;
        }

        input[type="file"] {
            padding: 8px 0;
        }

        .error {
            color: #dc2626;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .help-text {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        /* Image Preview */
        .current-image {
            margin-bottom: 15px;
        }

        .current-image img {
            max-width: 200px;
            max-height: 150px;
            border: 1px solid #ddd;
        }

        .image-label {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        /* Buttons */
        .form-actions {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-cancel {
            background: #6b7280;
            color: white;
        }

        .btn-cancel:hover {
            background: #4b5563;
        }

        .btn-submit {
            background: #2563eb;
            color: white;
        }

        .btn-submit:hover {
            background: #1d4ed8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .form-container {
                padding: 20px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .page-header h1 {
                font-size: 1.5rem;
            }

            .form-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="page-header">
            <h1>Edit Berita</h1>
            <p>Edit berita atau artikel yang sudah ada</p>
        </div>

        <!-- Form -->
        <div class="form-container">
            <form action="/admin/news/{{ $news->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Judul -->
                <div class="form-group">
                    <label for="title">
                        Judul Berita <span class="required">*</span>
                    </label>
                    <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" required
                           placeholder="Masukkan judul berita">
                    @error('title')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konten -->
                <div class="form-group">
                    <label for="content">
                        Konten Berita <span class="required">*</span>
                    </label>
                    <textarea id="content" name="content" required
                              placeholder="Tulis konten berita di sini...">{{ old('content', $news->content) }}</textarea>
                    @error('content')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gambar -->
                <div class="form-group">
                    <label for="image">Gambar Berita</label>

                    @if($news->image)
                    <div class="current-image">
                        <img src="/storage/news/{{ $news->image }}" alt="{{ $news->title }}">
                        <p class="image-label">Gambar saat ini</p>
                    </div>
                    @endif

                    <input type="file" id="image" name="image" accept="image/*">
                    @error('image')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <p class="help-text">Format: JPEG, PNG, JPG, GIF (Max: 2MB)</p>
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label for="status">
                        Status <span class="required">*</span>
                    </label>
                    <select id="status" name="status" required>
                        <option value="draft" {{ old('status', $news->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $news->status) == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                    @error('status')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Actions -->
                <div class="form-actions">
                    <a href="/admin/news" class="btn btn-cancel">Batal</a>
                    <button type="submit" class="btn btn-submit">Update Berita</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Basic form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const title = document.getElementById('title').value.trim();
            const content = document.getElementById('content').value.trim();

            if (!title) {
                alert('Judul berita harus diisi');
                e.preventDefault();
                return;
            }

            if (!content) {
                alert('Konten berita harus diisi');
                e.preventDefault();
                return;
            }
        });
    </script>
</body>
</html>
