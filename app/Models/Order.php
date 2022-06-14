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

    public const status = [
        'Pending' => 'Pending',
        'Delivered' => 'Delivered',
        'Cancelled' => 'Cancelled',
        'Failed' => 'Failed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
