<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyDetails;
use App\Http\Controllers\AdminMasterController;
use Auth;
use DB;
use Validator;
Use Session;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        //$allcompany =  Company::get()->paginate(7);
        $allcompany = Company::orderBy('created_at','desc')->paginate(10);

        return view('home', compact('allcompany'));
    }
}
