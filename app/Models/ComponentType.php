<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'extra_details',
        'component_id',
        'slug',
    ];
}
