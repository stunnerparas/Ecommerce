<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'order_number',
        'payment_method',
        'user_id',
        'total_amount',
        'status',
        'transaction_id',
        'transaction_status',
        'is_seen',
        'currency',
        'coupon_id',
        'shipping_charge',
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

    public function coupon()
    {
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }
}
