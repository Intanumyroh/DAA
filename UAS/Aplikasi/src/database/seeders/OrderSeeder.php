<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User; // Mengambil model User jika diperlukan
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 10 data order secara acak
        for ($i = 0; $i < 10; $i++) {
            // Ambil user acak untuk setiap pesanan
            $user = User::inRandomOrder()->first();
            
            Order::create([
                'user_id' => $user->id, // Relasikan pesanan dengan user yang ada
                'total_amount' => rand(10000, 500000) / 100, // Total harga acak dalam format desimal
                'status' => $this->getRandomStatus(), // Ambil status pesanan acak
                'shipping_address' => 'Alamat Pengiriman ' . $i, // Alamat pengiriman dummy
                'shipped_at' => rand(0, 1) ? now() : null, // Random apakah sudah dikirim atau belum
            ]);
        }
    }

    /**
     * Fungsi untuk mendapatkan status pesanan acak
     */
    private function getRandomStatus()
    {
        $statuses = ['pending', 'paid', 'shipped', 'completed', 'cancelled'];
        return $statuses[array_rand($statuses)]; // Ambil status acak dari array
    }
}
