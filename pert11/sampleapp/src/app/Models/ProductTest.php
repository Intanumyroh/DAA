<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTest extends Mo4del
{
    use HasFactory;
        // Kolom-kolom yang dapat diisi secara massal
        protected $fillable = ['name', 'price', 'category'];
    
    
}
