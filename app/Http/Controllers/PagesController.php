<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class PagesController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


	public function log(){
		$data = array('email'=>Input::get('email'),'password'=>Input::get('password'),'privilege'=>Input::get('privilege'));
		$rules=array(
			'email' => 'required',
			'password' => 'required',
			'privilege' => 'required'
			);
		$validator = Validator::make($data, $rules);
		if($validator->fails()){

    // send back to the page with the input data and errors
      //      return json_encode($validator->errors());
			return Redirect::back()->withErrors($validator->errors())->withInput();
		}
		else {
			if(Auth::attempt($data)){
				Session::put('email',$data['email']);
				return Redirect::route('login');
			}
			else{
				return Redirect::route('dashboard')->with('message','Your email/password combination is incorrect!')->withInput();
			}
		}
	}
	public function signupform(){
		$data = Input::get('mode');
		switch ($data) {
			case '1':
			return View::make('signup_patient');
			break;
			case '2':
			return View::make('signup_doctor');

			break;
			case '3':
			return View::make('signup_medvend');
			break;
			
			default:
			return Redirect::route('home')->with('error',"Kindly Choose The correct Input");
			break;
		}
	}
	public function logout()
	{
		if(Auth::check()){
			Auth::guard('seller')->logout();
			Session::forget('seller_email');
		}
		return Redirect::to('store/login');
	}
	public function signup(){ 
		$data = Input::all(); 
		$rules=array(
			'name' => 'min:2',
			'email' => 'required|unique:users',
			'password' => 'required|min:4|confirmed',
			'password_confirmation' => 'required|min:4',
			'privilege' =>'required'
			);
		$validator = Validator::make($data, $rules);
		if($validator->fails()){

    // send back to the page with the input data and errors
			return json_encode($validator->errors());
      //  return Redirect::back()->withErrors($validator->errors())->withInput();
		}
		else {
			switch ($data['privilege']) {

				case '1':

				break;
				case '2':
				

				break;
				case '3':

				break;

				default:

				break;

			}
//Rest of Saving logic
			if(Auth::attempt($user)){
				Session::put('email',$data['email']);
				return 1;
			}
			else{
				return "Registration Failed! Please Try Again...";
			}
		}
	}

}
