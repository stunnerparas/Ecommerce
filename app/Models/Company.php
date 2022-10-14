<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'name',
        'email',
        'phone',
        'address',
        'description',
        'date',
        'website',
    ];

    public const currency = [
        'USD' => '$',
        'NPR' => 'Rs.',
        'INR' => '₹',
        'EUR' => '€',
        'AUD' => '$',
        'CAD' => '$',
    ];
}
