<?php

namespace Database\Seeders;

use App\Models\FoodGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            // Gudeg galleries (food_id: 1)
            [
                'food_id' => 1,
                'image_url' => '/storage/galleries/gudeg_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 1,
                'image_url' => '/storage/galleries/gudeg_2.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 1,
                'image_url' => '/storage/galleries/gudeg_3.jpg',
                'main_photo' => false
            ],

            // Rendang galleries (food_id: 2)
            [
                'food_id' => 2,
                'image_url' => '/storage/galleries/rendang_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 2,
                'image_url' => '/storage/galleries/rendang_2.jpg',
                'main_photo' => false
            ],

            // Rawon galleries (food_id: 3)
            [
                'food_id' => 3,
                'image_url' => '/storage/galleries/rawon_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 3,
                'image_url' => '/storage/galleries/rawon_2.jpg',
                'main_photo' => false
            ],

            // Pempek galleries (food_id: 4)
            [
                'food_id' => 4,
                'image_url' => '/storage/galleries/pempek_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 4,
                'image_url' => '/storage/galleries/pempek_2.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 4,
                'image_url' => '/storage/galleries/pempek_3.jpg',
                'main_photo' => false
            ],

            // Kerak Telor galleries (food_id: 5)
            [
                'food_id' => 5,
                'image_url' => '/storage/galleries/kerak_telor_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 5,
                'image_url' => '/storage/galleries/kerak_telor_2.jpg',
                'main_photo' => false
            ],

            // Ayam Betutu galleries (food_id: 6)
            [
                'food_id' => 6,
                'image_url' => '/storage/galleries/ayam_betutu_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 6,
                'image_url' => '/storage/galleries/ayam_betutu_2.jpg',
                'main_photo' => false
            ],

            // Coto Makassar galleries (food_id: 7)
            [
                'food_id' => 7,
                'image_url' => '/storage/galleries/coto_makassar_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 7,
                'image_url' => '/storage/galleries/coto_makassar_2.jpg',
                'main_photo' => false
            ],

            // Lumpia Semarang galleries (food_id: 8)
            [
                'food_id' => 8,
                'image_url' => '/storage/galleries/lumpia_semarang_1.jpg',
                'main_photo' => false
            ],
            [
                'food_id' => 8,
                'image_url' => '/storage/galleries/lumpia_semarang_2.jpg',
                'main_photo' => false
            ]
        ];

        foreach ($galleries as $gallery) {
            FoodGallery::create($gallery);
        }
    }
}
