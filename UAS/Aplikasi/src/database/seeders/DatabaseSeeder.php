<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user admin dengan role super_admin
        $this->seedUsers();

        // Buat produk
        $this->call(ProductSeeder::class);

        // Buat pesanan
        $this->call(OrderSeeder::class);
    }

    private function seedUsers(): void
    {
        // Cek jika admin sudah ada
        $user = User::where('email', 'admin@admin.com')->first();
        
        if (!$user) {
            // Jika belum ada, buat user admin baru
            $user = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);

            // Assign role super_admin
            $user->assignRole('super_admin');
        }
    }
}
