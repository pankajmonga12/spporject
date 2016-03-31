<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agelimit extends Model
{
    protected $table = 'agelimit';
     protected $fillable = [
        'minage', 'maxage',
    ];
}
