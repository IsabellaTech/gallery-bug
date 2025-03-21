<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['gallery', 'order', 'gallery_order'];

    protected $casts = [
        'gallery' => 'array',
        'order' => 'array',
    ];
}
