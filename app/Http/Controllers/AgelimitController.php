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
use App\Agelimit;
class AgelimitController extends Controller
{
    //

      function saveAgelimit()
  {
  	

  	 $rules = array(
    'title'    => 'required'
     );

	 $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

                 return Redirect::to('eligibility')
        ->withErrors($validator);
        }  else {

        $ageData = array(
        'minage'     => Input::get('minage'),
        'maxage'     => Input::get('maxage'),
        'status' => 1
    );


                $Agelimit = new Agelimit::find('1');

                if ($Agelimit->id) {

                	$Agelimit->minage = $ageData['minage'];
	                $Agelimit->maxage = $ageData['maxage'];
	                $Agelimit->save();
                
                } else {

                	$Agelimit = new Agelimit;
	                $Agelimit->fill( $ageData );
	                $Agelimit->save();

                }

                
            return Redirect::to('addagelimit');

        }

  	
   //echo "<pre> data : ".print_r($catData , TRUE)."</pre>";

  }
 
  function updateAgelimit(Request $request) {

        $id = $request->input('id');
    $eligibility = Eligibility::find($id);
    $eligibility->delete();
    Session::flash('message', ' Eligibility option is deleted now !');
    Session::flash('alert-class', 'alert-danger');
    echo json_encode($array= array('status'=> true));
    die();

  }
}
