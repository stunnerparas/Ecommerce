<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomMade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country',
        'country_code',
        'city',
        'street_no',
        'postal_code',
        'phone',
        'phone_type',
        'message',
        'status',
    ];
}
