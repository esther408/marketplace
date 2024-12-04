<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_listing extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
