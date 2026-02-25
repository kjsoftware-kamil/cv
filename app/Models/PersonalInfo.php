<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use Translatable;

    protected $fillable = [
        'full_name',
        'job_title',
        'job_title_en',
        'email',
        'phone',
        'location',
        'driving_licence',
        'languages',
        'website',
        'linkedin',
        'github',
        'photo',
        'bio',
        'bio_en',
    ];
}
