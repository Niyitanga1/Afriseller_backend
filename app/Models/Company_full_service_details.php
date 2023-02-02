<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_full_service_details extends Model
{
    use HasFactory;
    protected $fillable = [    
       
        'full_service_details_id',
        'service_id',
        'full_content',
        'main_image',
        'is_there_another_image'


    ];
}
