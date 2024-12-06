<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_listings extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name', 'description', 'price', 'quantity', 'category', 'status']; // Hindura ibi bitewe n'ibyo uri gukoresha
}


