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

      $job_name = $request->input('job_name');
      $eligibility = $request->input('eligibility');
      $qualification = $request->input('qualification');
      Session::put('job_name', $job_name );
      Session::put('eligibility', $eligibility );
      Session::put('qualification', $qualification );
      $jobList = DB::table('jobboard')
            ->join('categories as cat', 'cat.id', '=', 'jobboard.category')
            ->join('categories as scat', 'scat.id', '=', 'jobboard.subcategory')
            ->join('qualification as ql', 'ql.id', '=', 'jobboard.qualification')
            ->join('eligibility as el', 'el.id', '=', 'jobboard.eligibility')
            ->where('job_name', 'LIKE', '%'.$job_name.'%')
            ->where('eligibility', '=', $eligibility )
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
	 

      $job_name = Session::get('job_name');
      $eligibility = Session::get('eligibility');
      $qualification = Session::get('qualification');
      $jobList = DB::table('jobboard')
            ->join('categories as cat', 'cat.id', '=', 'jobboard.category')
            ->join('categories as scat', 'scat.id', '=', 'jobboard.subcategory')
            ->join('qualification as ql', 'ql.id', '=', 'jobboard.qualification')
            ->join('eligibility as el', 'el.id', '=', 'jobboard.eligibility')
            ->where('job_name', 'LIKE', '%'.$job_name.'%')
            ->where('eligibility', '=', $eligibility )
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
            ->select('jobboard.id','scat.id','jobboard.subcategory', 'jobboard.qualification','jobboard.eligibility','cat.category as category', 'scat.category as subcategory', 'ql.title as qualification', 'el.title as eligibility','logo','jobboard.job_name','jobboard.job_notification','jobboard.imp_date','jobboard.no_of_post','jobboard.application_fees')->get();

            echo "<pre> Data Job : ".print_r($jobList , TRUE)."</pre>";
            dd(DB::getQueryLog());
    }

}
