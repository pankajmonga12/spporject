<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Resources\Views;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\EligibilityModel;

class EligibilityController extends Controller
{
    
    function saveEligibility()
  {
  	

  	 $rules = array(
    'title'    => 'required'
     );

	$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()) {
		
		 return Redirect::to('eligibility')
        ->withErrors($validator);
	}  else {

        $elgData = array(
        'title'     => Input::get('title'),
        'status' => 1
    );

		$Eligibility = new Eligibility;
		$Eligibility->fill( $elgData );
		$Eligibility->save();
	    return Redirect::to('eligibility');
	
	}

  	
   //echo "<pre> data : ".print_r($catData , TRUE)."</pre>";

  }

  function deleteEligibility(Request $request) {

  	$id = $request->input('id');
    $eligibility = Eligibility::find($id);
    $eligibility->delete();
    Session::flash('message', ' Eligibility option is deleted now !'); 
    Session::flash('alert-class', 'alert-danger');
    echo json_encode($array= array('status'=> true));
    die();

  }
}
