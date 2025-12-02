<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $news = [
            [
                'title' => 'Tips Makan Sehat Harian untuk Keluarga',
                'slug' => 'tips-makan-sehat-harian',
                'excerpt' => 'Pelajari cara mudah menerapkan pola makan sehat dalam kehidupan sehari-hari keluarga Anda.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'news/featured-news.jpg',
                'author' => 'Admin',
                'status' => 'published',
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Resep Salad Segar untuk Musim Panas',
                'slug' => 'resep-salad-segar-musim-panas',
                'excerpt' => 'Nikmati kesegaran salad dengan resep mudah dan bahan-bahan yang mudah ditemukan.',
                'content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'image' => 'news/salad-resep.jpg',
                'author' => 'Chef Maria',
                'status' => 'published',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Manfaat Makanan Organik untuk Kesehatan',
                'slug' => 'manfaat-makanan-organik',
                'excerpt' => 'Temukan berbagai manfaat kesehatan dari mengonsumsi makanan organik secara rutin.',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'image' => 'news/organic-food.jpg',
                'author' => 'Dr. Health',
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Trend Makanan Sehat Tahun 2024',
                'slug' => 'trend-makanan-sehat-2024',
                'excerpt' => 'Simak prediksi trend makanan sehat yang akan populer di tahun 2024.',
                'content' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.',
                'image' => 'news/food-trends.jpg',
                'author' => 'Food Analyst',
                'status' => 'published',
                'published_at' => now()->subDays(4),
            ],
            [
                'title' => 'Cara Memilih Bahan Makanan yang Berkualitas',
                'slug' => 'cara-memilih-bahan-makanan-berkualitas',
                'excerpt' => 'Panduan lengkap memilih bahan makanan segar dan berkualitas untuk keluarga.',
                'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.',
                'image' => 'news/quality-ingredients.jpg',
                'author' => 'Nutrition Expert',
                'status' => 'published',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Menu Diet Seimbang untuk Pemula',
                'slug' => 'menu-diet-seimbang-pemula',
                'excerpt' => 'Rekomendasi menu diet seimbang yang mudah diikuti untuk pemula.',
                'content' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.',
                'image' => 'news/balanced-diet.jpg',
                'author' => 'Diet Consultant',
                'status' => 'published',
                'published_at' => now()->subDays(6),
            ],
        ];

        foreach ($news as $item) {
            News::firstOrCreate(
                ['slug' => $item['slug']], // cek berdasarkan slug
                $item                      // isi data jika belum ada
            );
        }
    }
}
