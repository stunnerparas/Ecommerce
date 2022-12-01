<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'slug',
        'image',
        'mobile_image',
        'description',
        'is_featured',
    ];

    public const is_featured = [
        1 => 'YES',
        0 => 'NO',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_types');
    }
}
