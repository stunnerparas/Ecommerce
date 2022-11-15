<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageShipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_method',
        'tracking_number',
        'estimated_arrival_date',
        'tracking_url',
        'file',
        'remarks',
        'user_id',
        'shipping_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
