<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kendaraan;


class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $kendaraans = [[
            'brand' => 'Tesla',
            'model' => 'Model X',
            'serial_number' => 'SN123456',
            'battery_capacity' => 100.0,
            'range' => 400,
            'price_per_day' => 150.00,
            'location' => 'Jakarta',
            'availability' => true,
       ]
        ];
        foreach ($kendaraans as $kendaraan){
            Kendaraan::create($kendaraan);
        }


        //
    }
}
