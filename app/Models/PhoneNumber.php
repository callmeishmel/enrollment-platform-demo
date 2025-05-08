<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $fillable = [
        'user_id',
        'phone'
    ];

    protected $casts = [
        'phone' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
