<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 
        'model', 
        'serial_number', 
        'battery_capacity', 
        'range', 
        'price_per_day', 
        'location', 
        'availability'
    ];
}
