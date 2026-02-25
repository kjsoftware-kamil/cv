<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use Translatable;

    protected $fillable = [
        'type',
        'title',
        'title_en',
        'subtitle',
        'subtitle_en',
        'body',
        'body_en',
        'image',
        'sort_order',
        'layout',
        'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
