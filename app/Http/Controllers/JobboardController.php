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
use App\Posttype;
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
    'job_name'    => 'required',


     );

	 $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

                 return Redirect::to('addjob')
        ->withErrors($validator);
        }  else { 

        }

   	 $file = array('image' => Input::file('logo'));

   	 $docs = array('pdffile' => Input::file('detailed_notification_file'));
   	  $extdoc = Input::file('detailed_notification_file')->getClientOriginalExtension();
      $fileNamedoc = '';
   	  if (isset($extdoc)) {
   	  	
   	  $destinationPath = 'files'; // upload path
      $extension = Input::file('detailed_notification_file')->getClientOriginalExtension(); // getting image extension
      $fileNamedoc = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('detailed_notification_file')->move($destinationPath, $fileNamedoc); // uploading file to given path
   	  }
     
    //  echo "<pre> data : ".print_r($docs , TRUE)."</pre>";
      //die();
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
	    'job_type'    => Input::get('job_type'),
	    'job_state'    => '',
	    'age_limit'    => Input::get('age_limit'),
	    'how_to_apply'    => Input::get('how_to_apply'),
	    'application_fees'    => Input::get('application_fees'),
	    'website_link'    => Input::get('website_link'),
	    'logo'    => $fileName,
	    'detailed_notification_file'    => $fileNamedoc,
	    'detailed_notification'    => Input::get('detailed_notification')
    );

     // $jobType = print_r( $jobData['job_type'] , TRUE);
   
     if ($jobType  = "2" ) {
     	// echo "enter loop"; 
     	$jobData['job_state'] = Input::get('job_state');
     } 

    // echo "job state data : ".print_r(Input::get('job_state') , TRUE)."</pre>";
     //echo "<pre> Job Data : ".print_r($jobData , TRUE)."</pre>";
     //die();
    
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
		

	    
	    $fileNamedoc = '';
		$jobboard = Jobboard::find( $request->id );
		
		if (Input::file('logo')) {
		  	
	   	  $destinationPath = 'logos'; // upload path
	      $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
	      $fileNamedoc = rand(11111,99999).'.'.$extension; // renameing image
	      Input::file('logo')->move($destinationPath, $fileNamedoc);
	        $jobboard->logo = $fileNamedoc; // uploading file to given path
		}
        

        $jobboard->job_name = $request->job_name;
        $jobboard->job_type = $request->job_type;
        $jobboard->job_state = $request->job_state;
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

    function saveposts() {


        
      $jobData = array(
        'posttype'    => Input::get('posttype'),
	    'qualificatiion'    => Input::get('qualificatiion'),
	    'eligibility'    => Input::get('eligibility'),
	    'no_of_post'    => Input::get('no_of_post')
    );


    	$posttype = new Posttype;
                $posttype->fill( $jobData );
                $posttype->save();

    }
}
