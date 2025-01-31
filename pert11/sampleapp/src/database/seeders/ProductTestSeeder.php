<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_tests')->insert([
            [
                'name' => 'Adidas',
                'price' => 1000.00,
                'category' => 'Shoes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike',
                'price' => 900.00,
                'category' => 'Shoes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
