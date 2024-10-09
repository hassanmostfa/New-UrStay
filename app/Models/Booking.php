<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'completed_unit_id',
        'owner_id',
        'start_date',
        'end_date',
        'user_price',
        'booking_status',
        'note',
        'total_price',
    ];
}
