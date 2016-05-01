<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usersearch extends Model
{
    
    protected $table = 'usersearch';
     protected $fillable = [
        'user_name','email_id', 'phone_no','qualification'
    ];

}
