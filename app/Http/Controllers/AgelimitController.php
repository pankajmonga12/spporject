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
    'minage'    => 'required',
    'maxage'    => 'required',
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

    $agelId = 1;
                $Agelimit = Agelimit::find($agelId);
                echo "<pre> Data : ".print_r($Agelimit , TRUE)."</pre>";

                if (isset($Agelimit->id)) {
                    echo "enter 1 loop ";
                	$Agelimit->minage = $ageData['minage'];
	                $Agelimit->maxage = $ageData['maxage'];
	                $Agelimit->save();
                
                } else {
                    echo "enter 2 loop ";
                	$Agelimit = new Agelimit;
	                $Agelimit->fill( $ageData );
	                $Agelimit->save();

                }

          

        }

  	
   

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
