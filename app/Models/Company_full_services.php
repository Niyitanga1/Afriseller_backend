<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_full_services extends Model
{
    use HasFactory;

    protected $fillable = [    
       
        'service_id',
        'service_name',
        'company_id',
        'service_recorded_by',
        'service_recorded_date'


    ];
}
