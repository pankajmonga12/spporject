<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobboard extends Model
{
    protected $table = 'joboard';
     protected $fillable = [
          'category','subcategory','job_name','job_notification','descipline','imp_date','no_of_post','post_description','eligibility','qualification','exp_req','age_limit','how_to_apply','application_fees','website_link','logo',
    'detailed_notification' ];

}
