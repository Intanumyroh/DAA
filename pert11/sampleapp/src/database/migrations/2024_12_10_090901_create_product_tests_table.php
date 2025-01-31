<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_tests', function (Blueprint $table) {
            $table->id(); // ID otomatis sebagai primary key
            $table->string('name'); // Nama produk
            $table->decimal('price', 10, 2); // Harga produk (10 digit total, 2 digit desimal)
            $table->string('category'); // Kategori produk
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tests');
    }
};
