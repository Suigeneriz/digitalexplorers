<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyDetails;
use Auth;
use DB;
use Validator;
Use Session;
use File;

class AdminMasterController extends Controller
{
    public static function getRegistrationCode($company)
    {
        $trackingNum = '';
        $checkNum = 0;
    do {
            $trackingNum = static::generateNewRegistrationCode($company);

            
            if($trackingNum == "true"){

             $checkNum = 0;

             }else{

                 $checkNum +=1;
                 $trackingNum = $trackingNum;

            }

        } while ($checkNum < 1);

        return $trackingNum;
    }
    /**
     * Generate new Campany Registration Number
     *
     * @return String nuber   
     */
    public static function generateNewCompanyCode($company)
    {
            $trNumber = substr(str_shuffle(str_repeat("1234567890", 6)), 0, 6);
            //Check if company number exist in company record
            if (Company::where('id', '=', $company)->where('company_code', '=', $trNumber)->exists()) {
                 return "true";
            }else{
                return $trNumber;
            }
    }
    /**
     * Generate new Campany Registration Number
     *
     * @return String nuber   
     */
    public static function generateNewRegistrationCode($company)
    {
            $trNumber = substr(str_shuffle(str_repeat("1234567890ABCDEFGHJKLMNPRSTUVWXYZ", 6)), 0, 6);
            //Check if company registration code exist in company record
            if (Company::where('id', '=', $company)->where('registration_code', '=', $trNumber)->exists()) {
                 return "true";
            }else{
                return $trNumber;
            }
    }

    /**
     * Generate one new word
     *
     * @return String nuber   
     */
    public static function randWord($length=10)
    {
        return substr(str_shuffle("ABCDEFGHJKLMNPRSTUVWXYZ"),0,$length);
    }
    /**
     * Generate one new email
     *
     * @return String    
     */
    public static function randEmail($length=7)
    {
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,$length)."@gmail.com";
    }
    /**
     * Generate one new word
     *
     * @return String numer   
     */
    public static function randMobile($length=8)
    {

        return "+370".substr(str_shuffle("1234567890"),0,$length);
    }
    /**
     * Generate one new word
     *
     * @return String numer   
     */
    public static function randNumber($length)
    {

        return substr(str_shuffle("1234567890"),0,$length);
    }
    /**
     * Generate one new word
     *
     * @return String date   
     */
    public static function randDate()
    {
        $timestamp = rand( strtotime("Jan 01 1991"), strtotime("Nov 01 2018") );
		return date("d.m.Y", $timestamp );
    }

    /**
     * Generate one new word
     *
     * @return String date   
     */
    public static function randDateTwo()
    {
        $timestamp = rand( strtotime("Jan 01 1991"), strtotime("Nov 01 2018") );
		return date("Y", $timestamp );
    }

    /**
     * Generate one new paragraph
     *
     * @return String word   
     */
    public static function randParagraph($type_check)
    {
    	$word = '';
    	if ($type_check == "type") {
    	  $type = array(
            array('Electronic money institution intermediary', 'Bank', 'Payment institution'), 
            array('Electronic money institution intermediary', 'Bank', 'Payment institution'), 
            array('Electronic money institution intermediary', 'Bank', 'Payment institution')
        	);
    	}else if ($type_check == "description") {
	    	$type = array(
	            array('Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 'Banks authorised in the Republic of Lithuania', 'Payment institutions holding a licence for restricted activity'),
	            array('Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 'Banks authorised in the Republic of Lithuania', 'Payment institutions holding a licence for restricted activity'), 
	            array('Electronic money institutions of EU Member States providing services in the Republic of Lithuania through an intermediary', 'Banks authorised in the Republic of Lithuania', 'Payment institutions holding a licence for restricted activity')
	        );
    	}
       
    	
       $word = $type[0][rand(0, 2)] . $type[1][rand(0, 2)] .$type[2][rand(0, 2)];

       return $word;
    }
}
