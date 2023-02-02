<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership_plan extends Model
{
    use HasFactory;

    protected $fillable = [    
       
        'membership_id',
        'membership_name',
         'membership_duration',
         'membership_recorded_date',
         'membership_recorded_by',
         'membership_fees'
 
 
     ];
}
