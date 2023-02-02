<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question_bank extends Model
{
    use HasFactory;
    protected $fillable = [ 
       'question_id',
        'question_name',
        'question_registered',
        'question_type',
        'question_marks_total'  

     ];


}
