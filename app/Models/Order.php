<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_number',
        'payment_method',
        'user_id',
        'total_amount',
        'status',
        'transaction_id',
        'transaction_status',
        'is_seen',
    ];
}
