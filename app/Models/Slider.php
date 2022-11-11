<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'heading',
        'title',
        'description',
        'btn_text',
        'btn_link',
        'category',
    ];

    public const positions = [
        'main-banner' => 'Main Banner',
        'signature' => 'Signature Banner',
        'classic' => 'Classic Banner',
        'accessories' => 'Accessories Banner',
        'men' => 'Men Banner',
        'women' => 'Women Banner',
        'superfine' => 'Superfine Banner',

        'luxury-cashmere-left-image' => 'Luxury Cashmere Left Banner',
        'luxury-cashmere-right-image' => 'Luxury Cashmere Right Banner',

        'top-left-image' => 'Top Left Banner',
        'top-above-image' => 'Top Above Banner',
        'top-center-image' => 'Top Center Banner',
        'top-below-image' => 'Top Below Banner',

        'footer-top-image' => 'Footer Top Banner',
        'footer-left-image' => 'Footer Left Banner',
        'footer-center-image' => 'Footer Center Banner',
        'footer-right-image' => 'Footer Right Banner',
    ];
}
