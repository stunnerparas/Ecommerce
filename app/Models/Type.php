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
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_types');
    }
}
