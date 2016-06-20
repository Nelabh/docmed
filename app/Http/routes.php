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
Route::get('/', array('as'=>'home','uses'=>'PagesController@home'));
Route::get('signup/doctor',array('as'=>'signupform_doctor','uses'=>'PagesController@signupform_doctor'));
Route::get('signup/patient',array('as'=>'signupform_patient','uses'=>'PagesController@signupform_patient'));	   
Route::get('signup/vendor',array('as'=>'signupform_medvend','uses'=>'PagesController@signupform_medvend'));	   
Route::post('signdoc',array('as'=>'signup_doctor','uses'=>'PagesController@signup_doctor'));
Route::post('signdoc',array('as'=>'signup_doctor','uses'=>'PagesController@signup_doctor'));
Route::post('signdoc',array('as'=>'signup_doctor','uses'=>'PagesController@signup_doctor'));
});

Route::group(['middleware' => ['auth']], function () {
Route::get('dashboard', array('as'=>'dashboard','uses'=>'UserController@dashboard'));
    
});


