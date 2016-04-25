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
    
     function Jobsearch()
    {
      
      $job_name = 'test';
      $jobList = DB::table('jobboard')
            ->join('categories as cat', 'cat.id', '=', 'jobboard.category')
            ->join('categories as scat', 'scat.id', '=', 'jobboard.subcategory')
            ->join('qualification as ql', 'ql.id', '=', 'jobboard.qualification')
            ->join('eligibility as el', 'el.id', '=', 'jobboard.eligibility')
            ->where('job_name', 'LIKE', '%'.$job_name.'%')
            ->where('eligibility', '=', 24)
            ->where('qualification', '=', 21)
            ->select('jobboard.id','cat.category as category', 'scat.category as subcategory', 'ql.title as qualification', 'el.title as eligibility','logo','jobboard.job_name','jobboard.job_notification','jobboard.imp_date','jobboard.no_of_post','jobboard.application_fees')->paginate(1);

      $data['jobList'] =  $jobList;
      return view('joblist' , $data);

    }
}
