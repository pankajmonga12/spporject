<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posttype extends Model
{
    protected $table = 'posttype';
     protected $fillable = [
        'post_id','posttype', 'qualificatiion','eligibility','no_of_post'
    ];
}
