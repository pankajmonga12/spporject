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
use Illuminate\Support\Facades\Redirect;
use App\Agelimit;
use App\Jobboard;
use Illuminate\Support\Facades\Session;
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

   	 $rules = array(
    'category'    => 'required',
    'subcategory'    => 'required',
    'job_name'    => 'required',
    'job_notification'    => 'required',
    'descipline'    => 'required',
    'imp_date'    => 'required',
    'no_of_post'    => 'required',
    'post_description'    => 'required',
    'eligibility'    => 'required',
    'qualification'    => 'required',
    'exp_req'    => 'required',
    'age_limit'    => 'required',
    'how_to_apply'    => 'required',
    'application_fees'    => 'required',
    'website_link'    => 'required',
    'logo'    => 'required',
    'detailed_notification'    => 'required'

     );

	 $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

                 return Redirect::to('addjob')
        ->withErrors($validator);
        }  else { 

        }

   	 $file = array('image' => Input::file('logo'));
     
    // echo "<pre> data : ".print_r($file , TRUE)."</pre>";
   	  $destinationPath = 'logos'; // upload path
      $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('logo')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message 	

      $jobData = array(
        'category'    => Input::get('category'),
	    'subcategory'    => Input::get('subcategory'),
	    'job_name'    => Input::get('job_name'),
	    'job_notification'    => Input::get('job_notification'),
	    'descipline'    => Input::get('descipline'),
	    'imp_date'    => Input::get('imp_date'),
	    'no_of_post'    => Input::get('no_of_post'),
	    'post_description'    => Input::get('post_description'),
	    'eligibility'    => Input::get('eligibility'),
	    'qualification'    => Input::get('qualification'),
	    'exp_req'    => Input::get('exp_req'),
	    'age_limit'    => Input::get('age_limit'),
	    'how_to_apply'    => Input::get('how_to_apply'),
	    'application_fees'    => Input::get('application_fees'),
	    'website_link'    => Input::get('website_link'),
	    'logo'    => $fileName,
	    'detailed_notification'    => Input::get('detailed_notification'),
    );

    
     $qualification = new Jobboard;
                $qualification->fill( $jobData );
                $qualification->save();
           

      Session::flash('success', 'Job Save Successfully'); 
       return Redirect::to('addjob');
   }



    public function updatejob(Request $request)
    {
        // Validate the request::find(1);...
		
		// echo "<pre> data : ".print_r($file , TRUE)."</pre>";
		

        $jobboard = Jobboard::find( $request->id );

        $jobboard->job_name = $request->job_name;
        $jobboard->job_notification = $request->job_notification;
        $jobboard->descipline = $request->descipline;
        $jobboard->imp_date = $request->imp_date;
        $jobboard->no_of_post = $request->no_of_post;
        $jobboard->post_description = $request->post_description;
        $jobboard->eligibility = $request->eligibility;
        $jobboard->qualification = $request->qualification;
        $jobboard->exp_req = $request->exp_req;
        $jobboard->age_limit = $request->age_limit;
        $jobboard->application_fees = $request->application_fees;
        $jobboard->website_link = $request->website_link;
        $jobboard->detailed_notification = $request->detailed_notification;

        $jobboard->save();

        return Redirect::to('updatedjobview');
    }
}
