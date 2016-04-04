<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
	return view('welcome');
	});

	Route::get('/login', function () {
	return view('login');
	});


	Route::get('admin', array('uses' => 'AdminController@showLogin'));

	// route to process the form
	Route::post('admin', array('uses' => 'AdminController@doLogin'));

	Route::get('category', array('uses' => 'AdminController@showCategory'));

	Route::get('subcategory', array('uses' => 'AdminController@showSubcategory'));

	Route::post('savecategory', array('uses' => 'CategoriesController@saveCat'));
	
	Route::post('deletecategory', 'CategoriesController@deleteCategory');

	Route::post('savesubcategory', 'CategoriesController@savesubCat');

	Route::get('addjob', 'AdminController@showJobBoard');

    Route::get('addeligibility', 'AdminController@showEligibility');

    Route::post('saveeligibility', array('uses' => 'EligibilityController@saveEligibility'));

    Route::post('deleteeligibility', 'EligibilityController@deleteEligibility');

    Route::get('addqualification', 'AdminController@showQualification');

    Route::post('savequalification', array('uses' => 'QualificationController@saveQualification'));

    Route::post('deletequalification', 'QualificationController@deleteQualification');

    Route::get('addagelimit', 'AdminController@showAgelimit');

    Route::post('saveagelimit', array('uses' => 'AgelimitController@saveAgelimit'));

    Route::get('jobboard', 'AdminController@showJobBoard');

    Route::post('fetchsubcat', 'JobboardController@fetchSubcat');

    Route::post('savejob', 'JobboardController@saveJob');

    Route::post('updatejob', 'JobboardController@updateJob');
   
    Route::get('jobboardlist', 'AdminController@showJobBoardList');

    Route::get('updatedjobview', function () {
	return view('updatedjobview');
	});

    Route::get('jobboardedit/{id}', 'AdminController@showJobBoardEdit');
});
