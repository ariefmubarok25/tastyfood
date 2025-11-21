<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run()
    {
        $galleries = [
            [
                'title' => 'Salad Buah Segar',
                'description' => 'Kombinasi buah-buahan segar dengan dressing khusus',
                'image' => 'contohgambargaleri1.png',
                'image_alt' => 'Salad buah segar dengan berbagai macam buah',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Smoothie Bowl',
                'description' => 'Smoothie bowl dengan topping buah dan granola',
                'image' => 'contohgambargaleri2.png',
                'image_alt' => 'Smoothie bowl warna-warni dengan topping sehat',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Avocado Toast',
                'description' => 'Roti panggang dengan alpukat dan taburan biji-bijian',
                'image' => 'contohgambargaleri3.png',
                'image_alt' => 'Avocado toast dengan presentation yang menarik',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Grilled Salmon',
                'description' => 'Salmon panggang dengan sayuran rebus',
                'image' => 'contohgambargaleri4.png',
                'image_alt' => 'Salmon panggang dengan sayuran segar',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Quinoa Bowl',
                'description' => 'Bowl quinoa dengan sayuran dan protein',
                'image' => 'contohgambargaleri5.png',
                'image_alt' => 'Quinoa bowl dengan berbagai topping sehat',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Fresh Juice',
                'description' => 'Jus buah dan sayuran segar tanpa gula',
                'image' => 'contohgambargaleri6.png',
                'image_alt' => 'Berbagai macam jus buah dan sayuran segar',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Healthy Dessert',
                'description' => 'Dessert sehat dengan bahan-bahan alami',
                'image' => 'contohgambargaleri7.png',
                'image_alt' => 'Dessert sehat rendah gula',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Vegetable Platter',
                'description' => 'Piring sayuran segar dengan berbagai macam dressing',
                'image' => 'contohgambargaleri8.png',
                'image_alt' => 'Platter sayuran segar berwarna-warni',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'title' => 'Protein Bowl',
                'description' => 'Bowl dengan protein tinggi untuk fitness',
                'image' => 'contohgambargaleri9.png',
                'image_alt' => 'Protein bowl dengan ayam dan sayuran',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'title' => 'Fresh Salad',
                'description' => 'Salad segar dengan dressing olive oil',
                'image' => 'contohgambargaleri10.png',
                'image_alt' => 'Salad segar dengan sayuran hijau',
                'order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
