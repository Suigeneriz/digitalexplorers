<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AllCompanyController@index')->name('client-dashboard');
Route::get('/details/{id}', 'AllCompanyController@show');

Route::post('/generateCompanyRcords', 'CompanyController@generateComanyRecord');
Route::post('/generateCompanyDetails', 'CompanyController@generateComanyDetails');
Route::get('/searchCompanyInfo', 'CompanyController@companySearch');
Route::get('/checkComanyRating', 'CompanyController@showRating');
Route::get('/chartAnalysis/{value}', 'CompanyController@showCharanAlysis');
Route::get('/boardview/{date}', 'CompanyController@showBoard');

