<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'slide_image', 'brand_name', 'Condition','price','camera','processor','ram','sim','status',
    ];
}
