<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use Translatable;

    protected $fillable = [
        'title',
        'title_en',
        'company',
        'location',
        'start_date',
        'end_date',
        'is_current',
        'description',
        'description_en',
        'sort_order',
        'is_visible',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
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
