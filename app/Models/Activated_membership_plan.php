<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activated_membership_plan extends Model
{
    use HasFactory;

    protected $fillable = [   
        'activated_membership_id',
         'company_id',
         'membership_id',
         'membership_start_from',
         'membership_end_to',
         'amount_paid',
         'payment_method_used',
         'registered_date',
         'registered_by'

     ];
}
