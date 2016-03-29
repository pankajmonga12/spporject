<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{
    //


  
  function saveCat()
  {
  	

  	$userdata = array(
        'category'     => Input::get('category'),
        'parent'  => 0,
        'status' => 1
    );
   
   echo "<pre> data : ".print_r($userdata , TRUE)."</pre>";

  }
}
