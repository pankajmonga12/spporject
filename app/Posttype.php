<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posttype extends Model
{
    protected $table = 'posttype';
     protected $fillable = [
        'post_id','posttype', 'qualificatiion','eligibility','no_of_post','age_limit','exp_req','general_application_fees','scst_application_fees','obc_application_fees','others_application_fees','max_age_limit','scst_min_age_limit','scst_max_age_limit','obc_min_age_limit','obc_max_age_limit','other_min_age_limit','other_max_age_limit','post_description'
    ];
}
