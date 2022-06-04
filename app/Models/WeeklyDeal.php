<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyDeal extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'btn_text',
        'btn_link',
        'end_day',
    ];

    public const days = [
        '7' => 'Sunday',
        '1' => 'Monday',
        '2' => 'Tuesday',
        '3' => 'Wednesday',
        '4' => 'Thursday',
        '5' => 'Friday',
        '6' => 'Saturday',
    ];
}
