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

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function generateComanyRecord(Request $request)
    {

         for($i=1; $i < 201; $i++){

             $comany =  new Company();
             $comany->name =  AdminMasterController::randWord();
             $comany->type =  AdminMasterController::randParagraph('type');
             $comany->business_form =  AdminMasterController::randParagraph('description');
             $comany->company_code =  AdminMasterController::generateNewCompanyCode($i);
             $comany->registration_code =  AdminMasterController::getRegistrationCode($i);
             $comany->email =  AdminMasterController::randEmail();
             $comany->address =  AdminMasterController::randWord();
             $comany->mobile =  AdminMasterController::randMobile();
             $comany->avtivation_status =  "Active";
             $comany->registration_date =  AdminMasterController::randDate();
             $comany->save();

         }

          return response()->json([],201);
    }
}
