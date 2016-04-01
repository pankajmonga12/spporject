<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Resources\Views;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Categories;
use App\Eligibility;
use App\Qualification;
use App\Agelimit;
use App\Jobboard;
use Illuminate\Support\Facades\DB;

class JobboardController extends Controller
{
    
   function fetchSubcat( Request $request )
   {

   	 $id = $request->input('id');

   	 $categories = Categories::where('parent', '=',  $id)->get();
   	  $categoryData = array();
       foreach ($categories as $category) {
    	$categoryD = array();
    	$categoryD['id'] = $category->id;
    	$categoryD['category'] = $category->category;
    	$categoryD['parent'] = $category->parent;
    	$categoryD['status'] = $category->status;
    	$categoryData[] = $categoryD;
    }
        
        echo json_encode($categoryData);
        die();
   }

   function saveJob() {

   	 $file = array('image' => Input::file('logo'));

   	  $destinationPath = 'logos'; // upload path
      $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
   }
}
