<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
 	  protected $fillable = [
        'product_image', 'slide_title', 'slide_description','publication_status',
    ];
}


 