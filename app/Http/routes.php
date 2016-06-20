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
Route::get('signup-doctor',array('as'=>'signupform_doctor','uses'=>'PagesController@signupform_doctor'));
Route::get('signup-patient',array('as'=>'signupform_patient','uses'=>'PagesController@signupform_patient'));	   
Route::get('signup-vendor',array('as'=>'signupform_medvend','uses'=>'PagesController@signupform_medvend'));	   
Route::get('logout',array('as'=>'logout','uses'=>'PagesController@logout'));

Route::post('signdoc',array('as'=>'signup_doctor','uses'=>'PagesController@verify'));
Route::post('signpat',array('as'=>'signup_patient','uses'=>'PagesController@verify'));
Route::post('signmed',array('as'=>'signup_medvend','uses'=>'PagesController@verify'));
});

Route::group(['middleware' => ['auth']], function () {
Route::get('dashboard', array('as'=>'dashboard','uses'=>'UserController@dashboard'));
Route::get('history', array('as'=>'history','uses'=>'UserController@history'));
    
});


