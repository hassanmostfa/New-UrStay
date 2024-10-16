<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'resident_number',
        'birth_date',
    ];
}
