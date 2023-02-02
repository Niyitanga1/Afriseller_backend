<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [    
       
        'company_full_name',
        'company_short_name',
        'company_tin',
        'company_phone',
        'company_email',
        'company_representative_name',
        'company_representative_id',
        'company_type',
        'company_registration_document',
        'company_website',
        'company_biography',
        'company_logo',
        'company_welcome_image',
        'company_reference',
        'company_registered_date',
        'company_status',
        'company_login_password',
        'is_login',
        'membership_status'
    ];


    protected $hidden = [
        'company_login_password',
       
    ];



}
