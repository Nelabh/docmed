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
Route::get('notverified',array('as'=>'notverified','uses'=>'PagesController@notverified'));


});

Route::group(['middleware' => ['auth']], function () {

Route::get('dashboard', array('as'=>'dashboard','uses'=>'UserController@dashboard'));
Route::get('history', array('as'=>'history','uses'=>'UserController@history'));
Route::get('dash',array('as'=>'dashboard2','uses'=>'UserController@dashboard2'));
Route::get('search',array('as'=>'search','uses'=>'UserController@search'));
Route::get('profile/{id}',array('as'=>'profile','uses'=>'UserController@profile'));
Route::get('basic-info',array('as'=>'basic_info','uses'=>'UserController@basic_info'));
Route::post('edit-patientinfo',array('as'=>'edit_patientinfo','uses'=>'UserController@edit_patientinfo'));
Route::get('health-status',array('as'=>'health_status','uses'=>'UserController@health_status'));
Route::post('edit-healthstatus',array('as'=>'edit_healthstatus','uses'=>'UserController@edit_healthstatus'));
Route::get('profile_doctor', array('as'=>'profile_doctor','uses'=>'DoctorController@profile_doctor'));
Route::get('accept/{id}', array('as'=>'accept','uses'=>'DoctorController@accept'));

Route::post('edit', array('as'=>'edit','uses'=>'DoctorController@edit'));
Route::get('profile_vendor', array('as'=>'profile_vendor','uses'=>'MedVendController@profile_vendor'));
Route::post('edit_vend', array('as'=>'edit_vend','uses'=>'MedVendController@edit_vend'));
Route::post('consult', array('as'=>'consult','uses'=>'UserController@consult'));
Route::post('uconsult', array('as'=>'uconsult','uses'=>'UserController@urgentconsult'));
Route::post('updateconsult', array('as'=>'updateconsult','uses'=>'UserController@updateconsult'));
});


Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
Route::get('verify-doctor',array('as'=>'verify_doctor','uses'=>'AdminController@verify_doctor'));
Route::get('verify-vendor',array('as'=>'verify_vendor','uses'=>'AdminController@verify_vendor'));
Route::get('verify-pathologist',array('as'=>'verify_pathologist','uses'=>'AdminController@verify_pathologist'));
Route::get('admin_dashboard',array('as'=>'admin_dashboard','uses'=>'AdminController@admin_dashboard'));
Route::get('getdata',array('as'=>'getdata','uses'=>'AdminController@getdata'));
Route::get('getdatamv',array('as'=>'getdatamv','uses'=>'AdminController@getdatamv'));
Route::get('getdatap',array('as'=>'getdatap','uses'=>'AdminController@getdatap'));

Route::get('/verify_d/{id}',array('as'=>'verify_d','uses'=>'AdminController@verify_d'));
Route::get('/delete_doctor/{id}',array('as'=>'delete_doctor','uses'=>'AdminController@delete_doctor'));
Route::get('/verify_v/{id}',array('as'=>'verify_v','uses'=>'AdminController@verify_v'));
Route::get('/delete_vendor/{id}',array('as'=>'delete_vendor','uses'=>'AdminController@delete_vendor'));
Route::get('/verify_p/{id}',array('as'=>'verify_p','uses'=>'AdminController@verify_p'));
Route::get('/delete_pathologist/{id}',array('as'=>'delete_pathologist','uses'=>'AdminController@delete_pathologist'));
Route::get('edit-doctor',array('as'=>'edit_doctor','uses'=>'AdminController@edit_doctor'));
Route::post('editdoctor/{id}',array('as'=>'editdoctor','uses'=>'AdminController@editdoctor'));
Route::get('edit-vendor',array('as'=>'edit_vendor','uses'=>'AdminController@edit_vendor'));
Route::post('editvendor/{id}',array('as'=>'editvendor','uses'=>'AdminController@editvendor'));
Route::get('edit-pathologist',array('as'=>'edit_pathologist','uses'=>'AdminController@edit_pathologist'));
Route::post('editpathologist/{id}',array('as'=>'editpathologist','uses'=>'AdminController@editpathologist'));









   
});