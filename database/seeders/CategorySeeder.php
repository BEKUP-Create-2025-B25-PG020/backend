<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'name' => 'Makanan Pokok',
                'description' => 'Makanan utama yang biasanya dikonsumsi sebagai hidangan pokok',
                'icon_url' => '/storage/icons/makanan_pokok.svg',
                'status' => 'active'
            ],
            [
                'name' => 'Jajanan Tradisional',
                'description' => 'Camilan dan jajanan khas daerah',
                'icon_url' => '/storage/icons/jajanan.svg',
                'status' => 'active'
            ],
            [
                'name' => 'Minuman Tradisional',
                'description' => 'Minuman khas daerah Indonesia',
                'icon_url' => '/storage/icons/minuman.svg',
                'status' => 'active'
            ],
            [
                'name' => 'Lauk Pauk',
                'description' => 'Lauk pendamping nasi',
                'icon_url' => '/storage/icons/lauk.svg',
                'status' => 'active'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
