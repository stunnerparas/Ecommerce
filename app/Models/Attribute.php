<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'show',
    ];

    public const show = [
        'Yes' => 'Yes',
        'No' => 'No',
    ];

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }
}
