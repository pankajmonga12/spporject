<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Resources\Views;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    //


  
  function saveCat()
  {
  	

  	$catData = array(
        'category'     => Input::get('category'),
        'parent'  => 0,
        'status' => 1
    );

	$Categories = new Categories;
	$Categories->fill( $array );
	$Categories->save();
   echo "<pre> data : ".print_r($userdata , TRUE)."</pre>";

  }
}
