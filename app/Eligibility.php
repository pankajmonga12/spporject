<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EligibilityModel extends Model
{
    protected $table = 'eligibility';
     protected $fillable = [
        'title', 'status',
    ];

}
