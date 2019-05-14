<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Rating;
use App\Models\CompanyDetails;
use App\Http\Controllers\AdminMasterController;
use Auth;
use DB;
use Validator;
Use Session;
use File;

class AllCompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$allcompany =  Company::get()->paginate(7);
        $allcompany = Rating::inRandomOrder()->get();

        return view('client-dashboard', compact('allcompany'));
    }

}
