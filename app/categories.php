<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //

     protected $fillable = [
        'category', 'parent', 'status',
    ];

}
