<?php

namespace App\Support\Sanitizers;

class FormDataSanitizer
{
    /**
     * Sanitize form data by trimming whitespace and removing HTML tags.
     *
     * @param array $data
     * @return array
     */
    public static function sanitize(array $data): array
    {
        return array_map(function ($value) {
            return is_array($value) ? self::sanitize($value) : trim(strip_tags($value));
        }, $data);
    }
}
