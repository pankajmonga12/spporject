<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
    protected $table = 'eligibility';
     protected $fillable = [
        'title', 'status',
    ];

}
