<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Resources\Views;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Categories;
class CategoriesController extends Controller
{
    //


  
  function saveCat()
  {
  	

  	 $rules = array(
    'category'    => 'required'
     );

	$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()) {
		
		 return Redirect::to('category')
        ->withErrors($validator);
	}  else {

        $catData = array(
        'category'     => Input::get('category'),
        'parent'  => 0,
        'status' => 1
    );

		$Categories = new Categories;
		$Categories->fill( $catData );
		$Categories->save();
	    return Redirect::to('category');
	
	}

  	
   //echo "<pre> data : ".print_r($catData , TRUE)."</pre>";

  }

  function deleteCategory(Request $request) {

  	$id = $request->input('id');
    $categories = Categories::find($id);
    $categories->delete();
    Session::flash('message', 'Category is deleted now !'); 
Session::flash('alert-class', 'alert-danger');
  	 return Redirect::to('category');
  }
}
