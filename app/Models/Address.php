<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'street_address',
        'street_address_2',
        'city',
        'state',
        'zip_code'
    ];

    protected $casts = [
        'street_address' => 'string',
        'street_address_2' => 'string',
        'city'           => 'string',
        'state'          => 'string',
        'zip_code'       => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
