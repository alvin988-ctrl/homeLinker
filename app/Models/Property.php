<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
       protected $fillable = ["title", "description", "price", "location", "type", "status", "images"];

        protected $casts = [
        'images' => 'array', // Laravel will automatically json_encode/decode
    ];

}
