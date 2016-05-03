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
use Illuminate\Support\Facades\View;
use App\Categories;
use App\Eligibility;
use App\Qualification;
use App\Agelimit;
use App\Jobboard;
use App\Posttype;
use App\Usersearch;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Vinelab\Editor\EditorServiceProvider;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    
    function homepage( )
    {
    	
      $eligibilities = Eligibility::where('status', '=', 1)->get();
      $eligibilityData = array();
      $eligibilityData[0] ='Select Eligibility';
    foreach ($eligibilities as $eligibility) {

    	$eligibilityData[$eligibility->id] = $eligibility->title;
    }


     $qualification = Qualification::where('status', '=', 1)->get();
     $qualificationData = array();
     $qualificationData[0] ='Select Qualification';
    foreach ($qualification as $qualificationm) {
    	$qualificationData[$qualificationm->id] = $qualificationm->title;
    }
     
     $data['eligibility'] = $eligibilityData;
	 $data['qualification'] = $qualificationData;

     return view('home' , $data );

    }
     function Jobsearch( Request $request )
    {
      
      //$job_name = $request->input('job_name');
    	//echo "<pre> Data : ".print_r( $request , TRUE)."</pre>";
    	//echo "Data ";
     $email_id = $request->input('email_id'); 
     $usersearch = Usersearch::where( 'email_id', '=', $email_id )->get();
     
     echo "<pre> Data : ".print_r( $usersearch , TRUE)."</pre>";
     echo "count :".count($check_friend_request);
     if (isset($usersearch)) {

     	echo "enter loop";

     	 $usersearch = Usersearch::find( $usersearch[0]->id );

         $usersearch->user_name = Input::get('user_name');
          $usersearch->phone_no = Input::get('phone_no');
           $usersearch->qualification = Input::get('qualification');

        $usersearch->save();
     }  else  {

     	 $rules = array(
        
        'email_id'    => 'required',
        'user_name'    => 'required',
        'phone_no'    => 'required',
        'qualification'    => 'required'

     );

	 $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

                 return Redirect::to('home')
        ->withErrors($validator);
        }  else {

        $searchData = array(
        'email_id'     => Input::get('email_id'),
        'user_name'     => Input::get('user_name'),
        'phone_no'     => Input::get('phone_no'),
        'qualification'     => Input::get('qualification')
    );

//echo "<pre> searchData : ".print_r( $searchData , TRUE)."</pre>";
                $usersearch = new Usersearch;
                $usersearch->fill( $searchData );
                $usersearch->save();

     }
 }
    // echo "Id : ".$usersearch->id;
     /*$email_id = $request->input('email_id'); 
      echo "data : ".$email_id;



       $rules = array(
        
        'email_id'    => 'required',
        'user_name'    => 'required',
        'phone_no'    => 'required',
        'qualification'    => 'required'

     );

	 $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

                 return Redirect::to('home')
        ->withErrors($validator);
        }  else {

        $searchData = array(
        'email_id'     => Input::get('email_id'),
        'user_name'     => Input::get('user_name'),
        'phone_no'     => Input::get('phone_no'),
        'qualification'     => Input::get('qualification')
    );

echo "<pre> searchData : ".print_r( $searchData , TRUE)."</pre>";
                $usersearch = new Usersearch;
                $usersearch->fill( $searchData );
                $usersearch->save();
           // return Redirect::to('addqualification');

        }

*/
      
     // echo "<pre> User Search Data : ".print_r( $usersearch , TRUE)."</pre>";
       //echo "Id : ".$usersearch[0]->id;
      //die();
     $eligibilities = Eligibility::where('status', '=', 1)->get();
      $eligibilityData = array();
      $eligibilityData[0] ='Select Eligibility';
    foreach ($eligibilities as $eligibility) {

    	$eligibilityData[$eligibility->id] = $eligibility->title;
    }


     $qualification = Qualification::where('status', '=', 1)->get();
     $qualificationData = array();
     $qualificationData[0] ='Select Qualification';
    foreach ($qualification as $qualificationm) {
    	$qualificationData[$qualificationm->id] = $qualificationm->title;
    }
     
     $data['eligibility'] = $eligibilityData;
	 $data['qualification'] = $qualificationData;

      
      $qualification = $request->input('qualification');
      Session::put('qualification', $qualification );
      $jobList = DB::table('jobboard')
            ->join('categories as cat', 'cat.id', '=', 'jobboard.category')
            ->join('categories as scat', 'scat.id', '=', 'jobboard.subcategory')
            ->join('qualification as ql', 'ql.id', '=', 'jobboard.qualification')
            ->join('eligibility as el', 'el.id', '=', 'jobboard.eligibility')
            ->where('qualification', '=', $qualification )
            ->select('jobboard.id','cat.category as category', 'scat.category as subcategory', 'ql.title as qualification', 'el.title as eligibility','logo','jobboard.job_name','jobboard.job_notification','jobboard.imp_date','jobboard.no_of_post','jobboard.application_fees')->paginate(15);

      $data['jobList'] =  $jobList;
      return view('joblist' , $data);

    }

     function JobsearchPage()
    {

      $eligibilities = Eligibility::where('status', '=', 1)->get();
      $eligibilityData = array();
      $eligibilityData[0] ='Select Eligibility';
    foreach ($eligibilities as $eligibility) {

    	$eligibilityData[$eligibility->id] = $eligibility->title;
    }


     $qualification = Qualification::where('status', '=', 1)->get();
     $qualificationData = array();
     $qualificationData[0] ='Select Qualification';
    foreach ($qualification as $qualificationm) {
    	$qualificationData[$qualificationm->id] = $qualificationm->title;
    }
     
     $data['eligibility'] = $eligibilityData;
	 $data['qualification'] = $qualificationData;
	 
      $qualification = Session::get('qualification');
      $jobList = DB::table('jobboard')
            ->join('categories as cat', 'cat.id', '=', 'jobboard.category')
            ->join('categories as scat', 'scat.id', '=', 'jobboard.subcategory')
            ->join('qualification as ql', 'ql.id', '=', 'jobboard.qualification')
            ->join('eligibility as el', 'el.id', '=', 'jobboard.eligibility')
            ->where('qualification', '=', $qualification )
            ->select('jobboard.id','cat.category as category', 'scat.category as subcategory', 'ql.title as qualification', 'el.title as eligibility','logo','jobboard.job_name','jobboard.job_notification','jobboard.imp_date','jobboard.no_of_post','jobboard.application_fees')->paginate(15);

      $data['jobList'] =  $jobList;
      return view('joblist' , $data);

    }

     function JobData($id)
    {
    	
    	DB::enableQueryLog();
    	echo "Data : ".$id;
    	$jobList = DB::table('jobboard')
            ->leftJoin('categories as cat', 'cat.id', '=', 'jobboard.category')
            ->leftJoin('categories as scat', 'scat.id', '=', 'jobboard.subcategory')
            ->leftJoin('qualification as ql', 'ql.id', '=', 'jobboard.qualification')
            ->leftJoin('eligibility as el', 'el.id', '=', 'jobboard.eligibility')
            ->where('jobboard.id', '=', $id )
            ->select('jobboard.id','scat.id','jobboard.subcategory as ssubc','jobboard.*','cat.category as category', 'scat.category as subcategory', 'ql.title as qualification', 'el.title as eligibility','logo','jobboard.job_name','jobboard.job_notification','jobboard.imp_date','jobboard.no_of_post','jobboard.application_fees')->get();

            echo "<pre> Data Job : ".print_r($jobList , TRUE)."</pre>";


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
            dd(DB::getQueryLog());
    }

}
