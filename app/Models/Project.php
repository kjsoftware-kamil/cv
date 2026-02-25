<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Translatable;

    protected $fillable = [
        'name',
        'name_en',
        'description',
        'description_en',
        'url',
        'github_url',
        'image',
        'technologies',
        'sort_order',
        'is_visible',
    ];

    protected $casts = [
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

    public function getTechnologiesArrayAttribute(): array
    {
        if (empty($this->technologies)) {
            return [];
        }

        return array_map('trim', explode(',', $this->technologies));
    }
}
