<?php

namespace App\Traits;

trait Translatable
{
    public function trans(string $attribute): ?string
    {
        $locale = app()->getLocale();

        if ($locale === 'en') {
            $translatedKey = $attribute . '_en';

            if (isset($this->attributes[$translatedKey]) && !empty($this->attributes[$translatedKey])) {
                return $this->attributes[$translatedKey];
            }
        }

        return $this->getAttribute($attribute);
    }
}
