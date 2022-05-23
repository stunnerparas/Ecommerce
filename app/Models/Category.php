<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'parent_id',
        'order',
        'featured',
        'banner',
        'image',
        'description',
        'slug',
    ];

    public const featured = [
        'No' => 'No',
        'Yes' => 'Yes',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
