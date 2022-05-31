<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'description',
        'price',
        'featured_image',
        'visibility_status',
        'slug',
        'type',
        'tag',
        'rating',
    ];

    public const visibility_status = [
        'Draft' => 'Draft',
        'Published' => 'Published',
    ];

    public const type = [
        'Luxury' => 'Luxury',
        'Signature' => 'Signature',
        'Classic' => 'Classic',
        'Accessories' => 'Accessories',
    ];

    public const tags = [
        '' => 'None',
        'New' => 'New',
        'Sale' => 'Sale',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attributes');
    }

    public function types()
    {
        return $this->belongsToMany(Type::class, 'product_types');
    }
}
