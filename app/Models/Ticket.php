<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_no',
        'order_no',
        'code',
        'phone',
        'email',
        'first_name',
        'last_name',
        'address',
        'message',
        'status',
    ];
}
