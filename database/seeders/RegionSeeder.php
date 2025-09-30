<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $regions = [
            [
                'region_name' => 'Yogyakarta',
                'regency_city' => 'Kota Yogyakarta',
                'province' => 'DI Yogyakarta',
                'island' => 'Jawa',
                'region_code' => 'YK'
            ],
            [
                'region_name' => 'Padang',
                'regency_city' => 'Kota Padang',
                'province' => 'Sumatera Barat',
                'island' => 'Sumatera',
                'region_code' => 'PDG'
            ],
            [
                'region_name' => 'Surabaya',
                'regency_city' => 'Kota Surabaya',
                'province' => 'Jawa Timur',
                'island' => 'Jawa',
                'region_code' => 'SBY'
            ],
            [
                'region_name' => 'Palembang',
                'regency_city' => 'Kota Palembang',
                'province' => 'Sumatera Selatan',
                'island' => 'Sumatera',
                'region_code' => 'PLG'
            ],
            [
                'region_name' => 'Jakarta',
                'regency_city' => 'DKI Jakarta',
                'province' => 'DKI Jakarta',
                'island' => 'Jawa',
                'region_code' => 'JKT'
            ],
            [
                'region_name' => 'Bali',
                'regency_city' => 'Pulau Bali',
                'province' => 'Bali',
                'island' => 'Bali',
                'region_code' => 'DPS'
            ],
            [
                'region_name' => 'Makassar',
                'regency_city' => 'Kota Makassar',
                'province' => 'Sulawesi Selatan',
                'island' => 'Sulawesi',
                'region_code' => 'MKS'
            ],
            [
                'region_name' => 'Semarang',
                'regency_city' => 'Kota Semarang',
                'province' => 'Jawa Tengah',
                'island' => 'Jawa',
                'region_code' => 'SMG'
            ]
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
