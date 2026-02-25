<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use Translatable;

    protected $table = 'education';

    protected $fillable = [
        'degree',
        'degree_en',
        'field_of_study',
        'field_of_study_en',
        'institution',
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
