<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question_bank_options extends Model
{
    use HasFactory;

    protected $fillable = [  
        'question_option_id',
        'question_id',
        'option_name',
        'option_status',
        'option_registered_date',
        'option_registered_by',
        'option_marks'

    ];

}
