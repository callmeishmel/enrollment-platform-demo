<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class PhoneNumber extends Model
{
    protected $fillable = [
        'user_id',
        'phone'
    ];

    protected function phone(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => preg_replace('/\D/', '', $value),
            get: fn ($value) => preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $value)
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
