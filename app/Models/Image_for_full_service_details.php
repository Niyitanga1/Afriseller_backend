<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_for_full_service_details extends Model
{
    use HasFactory;
    protected $fillable = [    
       
       'image_details_id',
       'full_service_details_id',
        'image_location',
        'image_uploaded_date',
        'image_uploaded_by',
        'image_status'


    ];
}
