<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Adidas',
            'price' => 1000,
            'category' => 'Shoes',
        ]);

        Product::create([
            'name' => 'Nike',
            'price' => 900,
            'category' => 'Shoes',
        ]);
    }
}
