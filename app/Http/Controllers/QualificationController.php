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
use App\Qualification;
class QualificationController extends Controller
{
    //

    function saveQualification()
  {
  	

  	 $rules = array(
    'title'    => 'required'
     );

	 $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

                 return Redirect::to('qualification')
        ->withErrors($validator);
        }  else {

        $elgData = array(
        'title'     => Input::get('title'),
        'status' => 1
    );

                $qualification = new Qualification;
                $qualification->fill( $elgData );
                $qualification->save();
            return Redirect::to('addqualification');

        }

  	
   //echo "<pre> data : ".print_r($catData , TRUE)."</pre>";

  }
 
  function deleteQualification(Request $request) {

        $id = $request->input('id');
    $eligibility = Qualification::find($id);
    $eligibility->delete();
    Session::flash('message', ' Qualification option is deleted now !');
    Session::flash('alert-class', 'alert-danger');
    echo json_encode($array= array('status'=> true));
    die();

  }
}
