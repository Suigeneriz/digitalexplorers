<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyDetails;
use App\Models\Rating;
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
    public function showRating(Request $request)
    {
        $date =  substr($request->date, 0, 4);
        
        $allcompany =  CompanyDetails::where('year', '=', $date)->get();

        return view('companyRating', compact('allcompany'));
    }
    public function showCharanAlysis(Request $request)
    {
        //$date =  substr($request->date, 0, 4);
        
        //$allcompany =  CompanyDetails::orderBy('year','desc')->get();
        //$allcompany = CompanyDetails::select('year')->distinct()->orderBy('year','asc')->get();
        $allcompany =  Rating::get();

        $get_Value = $request->value;

        return view('chatAnalysis', compact('allcompany','get_Value'));
    }
    public static function sumCharanAlysis($id,$date)
    {
    
        $allcompany = Rating::where('id', '=', $id)->get();

        $total = 0;
        foreach ($allcompany as $company) {
   

                if($date =="turnover"){
                    $total += $company->turnover;
                }else if($date =="sales"){
                    $total += $company->sales;
                }else if($date =="assets"){
                    $total += $company->assets;
                }else if($date =="market_value"){
                    $total += $company->market_value;
                }

         
        }

        return $total;
    }
     public function showBoard(Request $request){
        //$allcompany = Company::orderBy('id','desc')->get();
        $allcompany = CompanyDetails::where('year', '=', $request->date)->get();

        $dateYear = $request->date;
        return view('client-board-view-dashboard', compact('allcompany','dateYear'));
    }
    /**
     * Search company record by registration code
     *
     */
    public function companySearch(Request $request)
    {
        $allcompany =  Company::where('registration_code', '=', $request->RegistrationCode)->paginate(7);

     
        //return view('home', compact('bookings'));
        return view('home', compact('allcompany'));
    }

    public function importFileIntoDB(Request $request){
    if($request->hasFile('sample_file')){
        $path = $request->file('sample_file')->getRealPath();
        $data = \Excel::load($path)->get();
        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['name' => $value->name, 'details' => $value->details];
            }
            if(!empty($arr)){
                \DB::table('products')->insert($arr);
                dd('Insert Record successfully.');
            }
        }
    }
    dd('Request data does not have any files to import.');      
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

    public function generateComanyDetails(Request $request)
    {

         for($i=1; $i < 41; $i++){

             $comany =  new CompanyDetails();
             $comany->company_id =  $i;
             $comany->vat =  "LT".AdminMasterController::randNumber(5);
             $comany->manager =  AdminMasterController::randWord();
             $comany->employees =  AdminMasterController::randNumber(3);
             $comany->average_salary =  AdminMasterController::randNumber(4);
             $comany->social_insurance_taxes =  AdminMasterController::randNumber(5);
             $comany->turnover =  AdminMasterController::randNumber(6);
             $comany->social_media_likes =  AdminMasterController::randNumber(6);
             $comany->social_media_followers =  AdminMasterController::randNumber(6);
             $comany->year =  AdminMasterController::randDateTwo();
             $comany->save();

         }

          return response()->json([],201);
    }
}
