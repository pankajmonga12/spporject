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

class AdminController  extends Controller
{
 function showLogin()
{
    // show the form
    return view('login');
}

 function doLogin()
{
// process the form
  $rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
  );

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return Redirect::to('login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
} else {

    // create our user data for the authentication
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

    // attempt to do the login
    if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
         return view('dashboard');
}
}
}

 function showCategory()
{
    // show the form
    $categories = Categories::where('parent', '=', 0)->get();
    $categoryData = array();
    foreach ($categories as $category) {
    	$categoryD = array();
    	$categoryD['id'] = $category->id;
    	$categoryD['category'] = $category->category;
    	$categoryD['parent'] = $category->parent;
    	$categoryD['status'] = $category->status;
    	$categoryData[] = $categoryD;
    }
    return view('category' , ['categories' => $categoryData]);
}

 function showSubcategory()
{
    // show the form
    $categories = Categories::where('parent', '=', 0)->get();
    $categoriesD = Categories::where('parent', '>', 0)->get();
    $categoryData = array();
    $categoryDrop = array();
    $categoryDrop[0] ='Select Category';
    foreach ($categories as $category) {
    	$categoryDrop[$category->id] =$category->category;
    }

    foreach ($categoriesD as $categorydatat) {
    	$categoryD = array();
    	$categoryD['id'] = $categorydatat->id;
    	$categoryD['category'] = $categorydatat->category;
    	$categoryD['parent'] = $categorydatat->parent;
    	$categoryD['status'] = $categorydatat->status;
    	$categoryData[] = $categoryD;
    }


    return view('subcategory' , ['categoriesdrop' => $categoryDrop,'categories' => $categoryData]);
}
}