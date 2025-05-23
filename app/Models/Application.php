<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'program_id',
        'payment_plan_id',
        'preferred_start_date',
        'status'
    ];

    protected $casts = [
        'preferred_start_date' => 'date',
    ];
}
