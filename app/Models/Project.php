<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'technologies',
        'visible',
        'order'
    ];

    protected $casts = [
        'technologies' => 'array',
        'visible' => 'boolean'
    ];
}
