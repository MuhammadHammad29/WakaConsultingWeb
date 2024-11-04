<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'tagline',
        'description',
        'benefits',
        'images',
        'testimonials',
    ];

    protected $casts = [
        'benefits' => 'array',       // Cast JSON to array
        'images' => 'array',
        'testimonials' => 'array',
    ];
}
