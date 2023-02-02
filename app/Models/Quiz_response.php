<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_response extends Model
{
    use HasFactory;
    protected $fillable = [  
    'response_id',
    'quiz_id',
    'question_id',
    'question_option_id',
    'answered_question_status',
    'earned_marks',
    'user_id',
    'user_location',
    'user_phone',
    'user_country',
];

}
