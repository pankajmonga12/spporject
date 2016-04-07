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
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminController   extends Controller
{
 function showLogin()
{
    // show the form

    if (Auth::check())
   {
     

    $activeD['active']= 'none';  
		$data['header'] = View::make('partial.header');

		/* Footer partial view */
		$data['footer'] = View::make('partial.footer');

		$data['submenu'] = View::make('partial.submenu', $activeD);
    
    return view('dashboard',$data);

   } else {
	 $data['header'] = View::make('partial.header');

   /* Footer partial view */
     $data['footer'] = View::make('partial.footer');

     return view('login', $data );
  }
    
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
         $activeD['active']= 'none';  
        $data['header'] = View::make('partial.header');

   /* Footer partial view */
        $data['footer'] = View::make('partial.footer');

        $data['submenu'] = View::make('partial.submenu', $activeD);

         return view('dashboard' , $data);
    }
 }
}

 function showCategory()
{
    // show the form
     if (Auth::check())
   {

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
    $activeD['active']= 'cat';  
		$data['header'] = View::make('partial.header');

		/* Footer partial view */
		$data['footer'] = View::make('partial.footer');

		$data['submenu'] = View::make('partial.submenu', $activeD);

	$data['categories'] = $categoryData;

    return view('category' , $data);
  
  } else {
	 
	 $data['header'] = View::make('partial.header');

   /* Footer partial view */
     $data['footer'] = View::make('partial.footer');

     return view('login', $data );
  }
}


function showJobBoard()
{
    // show the form
     $categories = Categories::where('parent', '=', 0)->get();
    $categoriesD = DB::table('categories')
            ->join('categories as cat', 'cat.id', '=', 'categories.parent')
             ->where('categories.parent', '>', 0)
            ->select('categories.category as category','categories.id as id', 'categories.status as status','cat.category as parent')
            ->get();
    $categoryData = array();
    $categoryDrop = array();
    $categoryDrop[0] ='Select Category';
    foreach ($categories as $category) {
    	$categoryDrop[$category->id] =$category->category;
    }

     $agelimit = Agelimit::where('id', '=', 1)->get();

     $agelimitData = array();
     
     foreach ($agelimit as $agelimitm) {
    	$agelimitD = array();
    	$agelimitD['id'] = $agelimitm->id;
    	$agelimitD['minage'] = $agelimitm->minage;
    	$agelimitD['maxage'] = $agelimitm->maxage;
    	$agelimitData[] = $agelimitD;
    }

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
    return view('jobboard' , ['categoriesdrop' => $categoryDrop,'eligibility' => $eligibilityData,'qualification' => $qualificationData,'agelimit' => $agelimitData]);
}


 function showSubcategory()
{
    // show the form

     if (Auth::check())
   {
    $categories = Categories::where('parent', '=', 0)->get();
    $categoriesD = DB::table('categories')
            ->join('categories as cat', 'cat.id', '=', 'categories.parent')
             ->where('categories.parent', '>', 0)
            ->select('categories.category as category','categories.id as id', 'categories.status as status','cat.category as parent')
            ->get();
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

    $activeD['active']= 'subcat';    
    $data['header'] = View::make('partial.header');

   /* Footer partial view */
	$data['footer'] = View::make('partial.footer');

	$data['submenu'] = View::make('partial.submenu',$activeD);

	$data['categoriesdrop'] = $categoryDrop;
	$data['categories'] = $categoryData;

    return view('subcategory' , $data);

  } else {
	 
	 $data['header'] = View::make('partial.header');

   /* Footer partial view */
     $data['footer'] = View::make('partial.footer');

     return view('login', $data );
  }
}


	function showjobform()
	{
	    // show the form
	    return view('jobboard');
	}

	function showEligibility()
    {
      $eligibilities = Eligibility::where('status', '=', 1)->get();
      $eligibilityData = array();
    foreach ($eligibilities as $eligibility) {
    	$eligibilityD = array();
    	$eligibilityD['id'] = $eligibility->id;
    	$eligibilityD['title'] = $eligibility->title;
    	$eligibilityD['status'] = $eligibility->status;
    	$eligibilityData[] = $eligibilityD;
    }

     $activeD['active']= 'eligibility';    
     $data['header'] = View::make('partial.header');

   /* Footer partial view */
	   $data['footer'] = View::make('partial.footer');

	   $data['submenu'] = View::make('partial.submenu',$activeD);

	   $data['eligibility'] = $eligibilityData;
     
     return view('eligibility' , $data);
    
    }

    function showQualification()
    {
      $qualification = Qualification::where('status', '=', 1)->get();
      $qualificationData = array();
    foreach ($qualification as $qualificationm) {
    	$eligibilityD = array();
    	$eligibilityD['id'] = $qualificationm->id;
    	$eligibilityD['title'] = $qualificationm->title;
    	$eligibilityD['status'] = $qualificationm->status;
    	$qualificationData[] = $eligibilityD;
    }
    return view('qualification' , ['qualification' => $qualificationData]);
    }


    function showAgelimit()
    {
      $agelimit = Agelimit::where('id', '=', 1)->get();
      $agelimitData = array();
    foreach ($agelimit as $agelimitm) {
    	$agelimitD = array();
    	$agelimitD['id'] = $agelimitm->id;
    	$agelimitD['minage'] = $agelimitm->minage;
    	$agelimitD['maxage'] = $agelimitm->maxage;
    	$agelimitData[] = $agelimitD;
    }

     $activeD['active']= 'agelimit';    
     $data['header'] = View::make('partial.header');

   /* Footer partial view */
	   $data['footer'] = View::make('partial.footer');

	   $data['submenu'] = View::make('partial.submenu',$activeD);

	   $data['agelimit'] = $agelimitData;

    return view('agelimit' , $data );
    }

    function showJobBoardList() 
   {
     
     $users = Jobboard::paginate(1);
     $jobList = DB::table('jobboard')
            ->join('categories as cat', 'cat.id', '=', 'jobboard.category')
            ->join('categories as scat', 'scat.id', '=', 'jobboard.subcategory')
            ->join('qualification as ql', 'ql.id', '=', 'jobboard.qualification')
            ->join('eligibility as el', 'el.id', '=', 'jobboard.eligibility')
            ->select('jobboard.id','cat.category as category', 'scat.category as subcategory', 'ql.title as qualification', 'el.title as eligibility','logo','jobboard.job_name','jobboard.job_notification','jobboard.imp_date','jobboard.no_of_post','jobboard.application_fees')->paginate(15);
    //echo "<pre> Data  ".print_r($jobList , TRUE)."</pre>";
     return view('jobboardlist' , ['joblist' => $jobList]);
   	
   }

   function showJobBoardEdit($id) 
   {
     $jobData = Jobboard::find($id);

      $categories = Categories::where('parent', '=', 0)->get();
    $categoriesD = DB::table('categories')
            ->join('categories as cat', 'cat.id', '=', 'categories.parent')
             ->where('categories.parent', '>', 0)
            ->select('categories.category as category','categories.id as id', 'categories.status as status','cat.category as parent')
            ->get();
    $categoryData = array();
    $categoryDrop = array();
    $categoryDrop[0] ='Select Category';
    foreach ($categories as $category) {
    	$categoryDrop[$category->id] =$category->category;
    }

     $agelimit = Agelimit::where('id', '=', 1)->get();

     $agelimitData = array();
     
     foreach ($agelimit as $agelimitm) {
    	$agelimitD = array();
    	$agelimitD['id'] = $agelimitm->id;
    	$agelimitD['minage'] = $agelimitm->minage;
    	$agelimitD['maxage'] = $agelimitm->maxage;
    	$agelimitData[] = $agelimitD;
    }

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

    //echo "<pre> Data  ".print_r($jobList , TRUE)."</pre>";
     return view('jobboardedit' , ['categoriesdrop' => $categoryDrop,'eligibility' => $eligibilityData,'qualification' => $qualificationData,'agelimit' => $agelimitData,'jobData' => $jobData]);
   	
   }
}