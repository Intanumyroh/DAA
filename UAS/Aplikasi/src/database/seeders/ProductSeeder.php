<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Granola Coklat',
                'description' => 'Granola sehat dengan coklat alami tanpa pemanis buatan.',
                'price' => 50000,
                'stock' => 100,
                'image' => 'granola_coklat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kacang Panggang',
                'description' => 'Kacang panggang tanpa minyak, kaya protein.',
                'price' => 30000,
                'stock' => 150,
                'image' => 'kacang_panggang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keripik Sayur',
                'description' => 'Keripik sayur renyah, dibuat tanpa bahan pengawet.',
                'price' => 40000,
                'stock' => 120,
                'image' => 'keripik_sayur.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
