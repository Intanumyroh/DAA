<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Hubungkan ke products
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('orders');
    }
};
