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
        $regions = [
            // ID: 1
            [
                'region_name' => 'Yogyakarta',
                'regency_city' => 'Kota Yogyakarta',
                'province' => 'DI Yogyakarta',
                'island' => 'Jawa',
                'region_code' => 'YK'
            ],
            // ID: 2
            [
                'region_name' => 'Minangkabau',
                'regency_city' => 'Kota Padang',
                'province' => 'Sumatera Barat',
                'island' => 'Sumatera',
                'region_code' => 'PDG'
            ],
            // ID: 3
            [
                'region_name' => 'Surabaya',
                'regency_city' => 'Kota Surabaya',
                'province' => 'Jawa Timur',
                'island' => 'Jawa',
                'region_code' => 'SBY'
            ],
            // ID: 4
            [
                'region_name' => 'Palembang',
                'regency_city' => 'Kota Palembang',
                'province' => 'Sumatera Selatan',
                'island' => 'Sumatera',
                'region_code' => 'PLG'
            ],
            // ID: 5
            [
                'region_name' => 'Betawi',
                'regency_city' => 'DKI Jakarta',
                'province' => 'DKI Jakarta',
                'island' => 'Jawa',
                'region_code' => 'JKT'
            ],
            // ID: 6
            [
                'region_name' => 'Bali',
                'regency_city' => 'Pulau Bali',
                'province' => 'Bali',
                'island' => 'Bali',
                'region_code' => 'DPS'
            ],
            // ID: 7
            [
                'region_name' => 'Makassar',
                'regency_city' => 'Kota Makassar',
                'province' => 'Sulawesi Selatan',
                'island' => 'Sulawesi',
                'region_code' => 'MKS'
            ],
            // ID: 8
            [
                'region_name' => 'Semarang',
                'regency_city' => 'Kota Semarang',
                'province' => 'Jawa Tengah',
                'island' => 'Jawa',
                'region_code' => 'SMG'
            ],
            // ID: 9
            [
                'region_name' => 'Aceh',
                'regency_city' => 'Banda Aceh',
                'province' => 'Nanggroe Aceh Darussalam',
                'island' => 'Sumatera',
                'region_code' => 'BTJ'
            ],
            // ID: 10
            [
                'region_name' => 'Banjarmasin',
                'regency_city' => 'Kota Banjarmasin',
                'province' => 'Kalimantan Selatan',
                'island' => 'Kalimantan',
                'region_code' => 'BDJ'
            ],
            // ID: 11
            [
                'region_name' => 'Indonesia Timur',
                'regency_city' => 'Maluku & Papua',
                'province' => 'Maluku & Papua',
                'island' => 'Maluku & Papua',
                'region_code' => 'TIMUR'
            ],
            // ID: 12
            [
                'region_name' => 'Madura',
                'regency_city' => 'Pulau Madura',
                'province' => 'Jawa Timur',
                'island' => 'Madura',
                'region_code' => 'MDR'
            ],
            // ID: 13
            [
                'region_name' => 'Solo',
                'regency_city' => 'Kota Surakarta',
                'province' => 'Jawa Tengah',
                'island' => 'Jawa',
                'region_code' => 'SOC'
            ],
            // ID: 14
            [
                'region_name' => 'Lombok',
                'regency_city' => 'Kota Mataram',
                'province' => 'Nusa Tenggara Barat',
                'island' => 'Lombok',
                'region_code' => 'LOP'
            ],
            // ID: 15
            [
                'region_name' => 'Bandung',
                'regency_city' => 'Kota Bandung',
                'province' => 'Jawa Barat',
                'island' => 'Jawa',
                'region_code' => 'BDO'
            ],
            // ID: 16
            [
                'region_name' => 'Medan',
                'regency_city' => 'Kota Medan',
                'province' => 'Sumatera Utara',
                'island' => 'Sumatera',
                'region_code' => 'KNO'
            ],
            // ID: 17
            [
                'region_name' => 'Manado',
                'regency_city' => 'Kota Manado',
                'province' => 'Sulawesi Utara',
                'island' => 'Sulawesi',
                'region_code' => 'MDC'
            ],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
