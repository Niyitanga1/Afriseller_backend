<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_booking extends Model
{
    use HasFactory;
    protected $fillable = [   
   'booking_id',
    'quiz_id',
    'user_id',
    'booking_registered_date'
];

}
