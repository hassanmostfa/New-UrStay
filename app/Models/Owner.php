<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Owner extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'owners';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

       // Define the relationship with units
       public function units()
       {
           return $this->hasMany(Unit::class);
       }
}
