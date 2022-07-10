<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'size_id',
        'color_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function color()
    {
        return $this->belongsTo(Attribute::class, 'color_id');
    }

    public function size()
    {
        return $this->belongsTo(Attribute::class, 'size_id');
    }
}
