<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posttype extends Model
{
    protected $table = 'posttype';
     protected $fillable = [
        'posttype', 'qualificatiion','eligibility','no_of_post'
    ];
}
