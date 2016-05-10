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

   	 //$docs = array('pdffile' => Input::file('detailed_notification_file'));
   	  //$extdoc = Input::file('detailed_notification_file')->getClientOriginalExtension();
      $fileNamedoc = '';
   	  if (Input::file('detailed_notification_file')) {
   	  	
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
      'general_no_of_post'    => Input::get('general_no_of_post'),
      'scst_no_of_post'    => Input::get('scst_no_of_post'),
      'obc_no_of_post'    => Input::get('obc_no_of_post'),
      'others_no_of_post'    => Input::get('others_no_of_post'),
	    'post_description'    => Input::get('post_description'),
	    'eligibility'    => Input::get('eligibility'),
	    'qualification'    => Input::get('qualification'),
	    'exp_req'    => Input::get('exp_req'),
	    'job_type'    => Input::get('job_type'),
	    'job_state'    => '',
	    'age_limit'    => Input::get('age_limit'),
      'max_age_limit'    => Input::get('max_age_limit'),
      'scst_min_age_limit'    => Input::get('scst_min_age_limit'),
      'scst_max_age_limit'    => Input::get('scst_max_age_limit'),
      'obc_min_age_limit'    => Input::get('obc_min_age_limit'),
      'obc_max_age_limit'    => Input::get('obc_max_age_limit'),
      'other_min_age_limit'    => Input::get('other_min_age_limit'),
      'other_max_age_limit'    => Input::get('other_max_age_limit'),
	    'application_fees'    => Input::get('application_fees'),
      'scst_application_fees'    => Input::get('scst_application_fees'),
      'obc_application_fees'    => Input::get('obc_application_fees'),
      'others_application_fees'    => Input::get('others_application_fees'),
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
        $jobboard->general_no_of_post = $request->general_no_of_post;
        $jobboard->scst_no_of_post = $request->scst_no_of_post;
        $jobboard->obc_no_of_post = $request->obc_no_of_post;
        $jobboard->others_no_of_post = $request->others_no_of_post;
        $jobboard->post_description = $request->post_description;
        $jobboard->eligibility = $request->eligibility;
        $jobboard->qualification = $request->qualification;
        $jobboard->exp_req = $request->exp_req;
        $jobboard->age_limit = $request->age_limit;
        $jobboard->max_age_limit = $request->max_age_limit;
        $jobboard->scst_min_age_limit = $request->scst_min_age_limit;
        $jobboard->scst_max_age_limit = $request->scst_max_age_limit;
        $jobboard->obc_min_age_limit = $request->obc_min_age_limit;
        $jobboard->obc_max_age_limit = $request->obc_max_age_limit;
        $jobboard->other_min_age_limit = $request->other_min_age_limit;
        $jobboard->other_max_age_limit = $request->other_max_age_limit;   
        $jobboard->application_fees = $request->application_fees;
        $jobboard->scst_application_fees = $request->scst_application_fees;
        $jobboard->obc_application_fees = $request->obc_application_fees;
        $jobboard->others_application_fees = $request->others_application_fees;
        $jobboard->website_link = $request->website_link;
        $jobboard->detailed_notification = $request->detailed_notification;

        $jobboard->save();

        return Redirect::to('updatedjobview');
    }

    function saveposts() {


 //DB::enableQueryLog();       
      $postData = array(
      	'post_id'    => Input::get('id'),
        'posttype'    => Input::get('posttype'),
	    'qualificatiion'    => Input::get('qualification'),
	    'eligibility'    => Input::get('eligibility'),
	    'no_of_post'    => Input::get('no_of_post'),
      'scst_no_of_post'    => Input::get('scst_no_of_post'),
      'obc_no_of_post'    => Input::get('obc_no_of_post'),
      'other_no_of_post'    => Input::get('other_no_of_post'),
      'general_application_fees'    => Input::get('application_fees'),
      'scst_application_fees'    => Input::get('scst_application_fees'),
      'obc_application_fees'    => Input::get('obc_application_fees'),
      'others_application_fees'    => Input::get('others_application_fees'),
    );

//echo "<pre> Data : ".print_r($postData , TRUE)."</pre>";

    	$posttype = new Posttype;
                $posttype->fill( $postData );
                $posttype->save();
//dd(DB::getQueryLog());
         return Redirect::to('jobboardlist');
    }

  function fetchposttype(Request $request) {

        $id = $request->input('id');
        //echo "<pre> Request Data  ".print_r($id , TRUE)."</pre>";


          $posttype = DB::table('posttype')
            ->leftJoin('qualification as ql', 'ql.id', '=', 'posttype.qualificatiion')
            ->leftJoin('eligibility as el', 'el.id', '=', 'posttype.eligibility')
            ->where('post_id', '=', $id)
            ->select('posttype.id','posttype','ql.title as qualification', 'el.title as eligibility','no_of_post')->get();
  // echo "<pre> Data  ".print_r($posttype , TRUE)."</pre>";
//$posttype = Posttype::where('post_id', '=',  $id)->get();

       $posttypeData = array();
     
     foreach ($posttype as $posttypes) {
    	$posttypeD = array();
    	$posttypeD['id'] = $posttypes->id;
    	$posttypeD['qualification'] = $posttypes->qualification;
    	$posttypeD['eligibility'] = $posttypes->eligibility;
    	$posttypeD['posttype'] = $posttypes->posttype;
    	$posttypeD['no_of_post'] = $posttypes->no_of_post;
    	$posttypeData[] = $posttypeD;
    }
       //echo "<pre> Data  ".print_r($posttypeData , TRUE)."</pre>";

         echo json_encode($posttypeData);
        die();

  }


function deletejob(Request $request) {

        $id = $request->input('id');
    $jobboard = Jobboard::find($id);
    $jobboard->delete();
    Session::flash('message', ' Jobboard option is deleted now !');
    Session::flash('alert-class', 'alert-danger');
    echo json_encode($array= array('status'=> true));
    die();

  }


  function deletepost(Request $request) {

        $id = $request->input('id');
    $posttype = Posttype::find($id);
    $posttype->delete();
    Session::flash('message', ' Jobboard option is deleted now !');
    Session::flash('alert-class', 'alert-danger');
    echo json_encode($array= array('status'=> true));
    die();

  }

  function fetchposttypetest() {


DB::enableQueryLog();
        $posttype = DB::table('posttype')
            ->leftJoin('qualification as ql', 'ql.id', '=', 'posttype.qualificatiion')
            ->leftJoin('eligibility as el', 'el.id', '=', 'posttype.eligibility')
            ->where('post_id', '=', '3')
            ->select('posttype.id','posttype','ql.title as qualification', 'el.title as eligibility','no_of_post')->get();

echo "<pre> Data  ".print_r($posttype , TRUE)."</pre>";
//$posttype = Posttype::where('post_id', '=',  $id)->get();
dd(DB::getQueryLog());
     /*   $posttypeData = array();
     
     foreach ($posttype as $posttypes) {
    	$posttypeD = array();
    	$posttypeD['id'] = $posttypes->id;
    	$posttypeD['qualification'] = $posttypes->qualification;
    	$posttypeD['eligibility'] = $posttypes->eligibility;
    	$posttypeD['posttype'] = $posttypes->posttype;
    	$posttypeD['no_of_post'] = $posttypes->no_of_post;
    	$posttypeData[] = $posttypetD;
    }
       echo "<pre> Data  ".print_r($posttypeData , TRUE)."</pre>";*/
        die();

  }


  function Fetchposttypedata(Request $request)
  {
      
    $id = $request->input('id');
   $posttype = Posttype::find($id);
   //echo "<pre> Post Data : ".print_r($posttype, TRUE)."</pre>";
   $posttypeDa = array();
   $posttypeData = array();

   $posttypeDa['id'] = $posttype->id;
      $posttypeDa['qualification'] = $posttype->qualificatiion;
      $posttypeDa['eligibility'] = $posttype->eligibility;
      $posttypeDa['posttype'] = $posttype->posttype;
      $posttypeDa['no_of_post'] = $posttype->no_of_post;
      $posttypeDa['scst_no_of_post'] = $posttype->scst_no_of_post;
      $posttypeDa['obc_no_of_post'] = $posttype->obc_no_of_post;
      $posttypeDa['other_no_of_post'] = $posttype->other_no_of_post;
      $posttypeDa['exp_req'] = $posttype->exp_req;
      $posttypeDa['age_limit'] = $posttype->age_limit;
      $posttypeDa['general_application_fees'] = $posttype->general_application_fees;
      $posttypeDa['scst_application_fees'] = $posttype->scst_application_fees;
      $posttypeDa['obc_application_fees'] = $posttype->obc_application_fees;
      $posttypeDa['others_application_fees'] = $posttype->others_application_fees;
      $posttypeDa['max_age_limit'] = $posttype->max_age_limit;
      $posttypeDa['scst_min_age_limit'] = $posttype->scst_min_age_limit;
      $posttypeDa['scst_max_age_limit'] = $posttype->scst_max_age_limit;
      $posttypeDa['obc_min_age_limit'] = $posttype->obc_min_age_limit;
      $posttypeDa['obc_max_age_limit'] = $posttype->obc_max_age_limit;
      $posttypeDa['other_min_age_limit'] = $posttype->other_min_age_limit;
      $posttypeDa['other_max_age_limit'] = $posttype->other_max_age_limit;
      $posttypeDa['post_description'] = $posttype->post_description;
      $posttypeData[] = $posttypeDa;
     /*
     foreach ( $posttype as $posttypes ) {
      $posttypeDa = array();
      
      echo "<pre> Post Data : ".print_r($posttypes , TRUE)."</pre>";
     $posttypeDa['id'] = $posttypes->id;
      $posttypeDa['qualification'] = $posttypes->qualification;
      $posttypeDa['eligibility'] = $posttypes->eligibility;
      $posttypeDa['posttype'] = $posttypes->posttype;
      $posttypeDa['no_of_post'] = $posttypes->no_of_post;
      $posttypeData[] = $posttypeDa;
    }*/
       //echo "<pre> Data  ".print_r($posttypeData , TRUE)."</pre>";

         echo json_encode($posttypeData);
        die();  
  }


  function SavechangePost( Request $request ) {
      
      $id = $request->input('id');
      $posttype = Posttype::find($id);
      

        $posttype->qualificatiion = $request->qualificationp;
        $posttype->eligibility = $request->eligibilityp;
        $posttype->posttype = $request->posttype;
        $posttype->no_of_post = $request->no_of_postp;
        $posttype->scst_no_of_post = $request->scst_no_of_postp;
        $posttype->obc_no_of_post = $request->obc_no_of_postp;
        $posttype->other_no_of_post = $request->other_no_of_postp;
        $posttype->exp_req = $request->exp_reqp;
        $posttype->age_limit = $request->age_limitp;
        $posttype->general_application_fees = $request->application_feesp;
        $posttype->scst_application_fees = $request->scst_application_feesp;
        $posttype->obc_application_fees = $request->obc_application_feesp;
        $posttype->others_application_fees = $request->others_application_feesp;
        $posttype->max_age_limit = $request->max_age_limitp;
        $posttype->scst_min_age_limit = $request->scst_min_age_limitp;
        $posttype->scst_max_age_limit = $request->scst_max_age_limitp;
        $posttype->obc_min_age_limit = $request->obc_min_age_limitp;
        $posttype->obc_max_age_limit = $request->obc_max_age_limitp;
        $posttype->obc_min_age_limit = $request->obc_min_age_limitp;
        $posttype->obc_max_age_limit = $request->obc_max_age_limitp;
        $posttype->other_min_age_limit = $request->other_min_age_limitp;
        $posttype->other_max_age_limit = $request->other_max_age_limitp;
        $posttype->post_description = $request->post_descriptionp;


        $posttype->save();
        return Redirect::to('jobboardlist');
  }

}
