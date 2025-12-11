<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'welcome_badge',
        'name',
        'title',
        'typing_titles',
        'description',
        'github_url',
        'linkedin_url',
        'instagram_url',
        'order'
    ];

    protected $casts = [
        'typing_titles' => 'array'
    ];
}
