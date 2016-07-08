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
Route::get('signup-pathology',array('as'=>'signupform_pathology','uses'=>'PagesController@signupform_pathology'));
Route::get('logout',array('as'=>'logout','uses'=>'PagesController@logout'));
Route::post('signdoc',array('as'=>'signup_doctor','uses'=>'PagesController@verify'));
Route::post('signpatho',array('as'=>'signup_pathology','uses'=>'PagesController@verify'));
Route::post('signpat',array('as'=>'signup_patient','uses'=>'PagesController@verify'));
Route::post('signmed',array('as'=>'signup_medvend','uses'=>'PagesController@verify'));
Route::post('log',array('as'=>'login','uses'=>'PagesController@log'));
Route::get('admin',array('as'=>'admin_login','uses'=>'PagesController@admin'));
Route::post('logadmin',array('as'=>'logadmin','uses'=>'PagesController@logadmin'));

});

Route::group(['middleware' => ['auth']], function () {
Route::get('dashboard', array('as'=>'dashboard','uses'=>'UserController@dashboard'));
Route::get('history', array('as'=>'history','uses'=>'UserController@history'));
Route::get('dash',array('as'=>'dashboard2','uses'=>'UserController@dashboard2'));
Route::get('search',array('as'=>'search','uses'=>'UserController@search'));
Route::get('profile/{id}',array('as'=>'profile','uses'=>'UserController@profile'));
});


Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
Route::get('verify-doctor',array('as'=>'verify_doctor','uses'=>'AdminController@verify_doctor'));
Route::get('verify-vendor',array('as'=>'verify_vendor','uses'=>'AdminController@verify_vendor'));
Route::get('admin_dashboard',array('as'=>'admin_dashboard','uses'=>'AdminController@admin_dashboard'));
Route::get('getdata',array('as'=>'getdata','uses'=>'AdminController@getdata'));
Route::get('getdatamv',array('as'=>'getdatamv','uses'=>'AdminController@getdatamv'));
Route::get('/verify_d/{id}',array('as'=>'verify_d','uses'=>'AdminController@verify_d'));
Route::get('/delete_doctor/{id}',array('as'=>'delete_doctor','uses'=>'AdminController@delete_doctor'));
Route::get('edit-doctor',array('as'=>'edit_doctor','uses'=>'AdminController@edit_doctor'));







   
});