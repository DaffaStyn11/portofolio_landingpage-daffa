<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioContent extends Model
{
    protected $fillable = [
        'section',
        'key',
        'value',
        'type',
        'order'
    ];

    protected $casts = [
        'value' => 'string',
    ];

    public static function getContent($section, $key, $default = '')
    {
        $content = self::where('section', $section)
                      ->where('key', $key)
                      ->first();
        
        return $content ? $content->value : $default;
    }

    public static function getSectionContent($section)
    {
        return self::where('section', $section)
                   ->orderBy('order')
                   ->get()
                   ->pluck('value', 'key')
                   ->toArray();
    }
}
