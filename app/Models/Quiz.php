<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [  
    'quiz_id' ,
    'quiz_name',
    'quiz_date_from',
    'quiz_time_from',
    'quiz_date_to',
    'quiz_time_to',
    'company_id',
   'quiz_registered_date',
    'quiz_registered_by',
    'quiz_total_marks',
    
];
}
