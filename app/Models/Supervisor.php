<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Supervisor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'supervisors';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];
}
