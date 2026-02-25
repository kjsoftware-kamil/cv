<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use Translatable;

    protected $fillable = [
        'name',
        'name_en',
        'icon',
        'category',
        'category_en',
        'proficiency',
        'color',
        'sort_order',
        'is_visible',
    ];

    protected $casts = [
        'proficiency' => 'integer',
        'is_visible' => 'boolean',
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
