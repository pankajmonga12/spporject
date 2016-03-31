<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EligibilityController extends Controller
{
    //

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

