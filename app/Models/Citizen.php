<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $table = 'citizens';

    protected $fillable = [
        'pid_number',
        'birth_date',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
