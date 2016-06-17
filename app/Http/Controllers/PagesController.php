<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Doctor;
use App\Patient;
use App\MedVend;
use App\User;
use App\Speciality;

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

   		return Redirect::back()->withErrors($validator->errors())->withInput();
		}
		else {
			if(Auth::attempt($data)){
				Session::put('email',$data['email']);
				return Redirect::route('dashboard');
			}
			else{
				return Redirect::route('home')->with('message','Your email/password combination is incorrect!')->withInput();
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
	public function logout(){
		if(Auth::check()){
			Auth::guard('seller')->logout();
			Session::forget('seller_email');
		}
		return Redirect::to('store/login');
	}
	public function verify(){
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

   		return json_encode($validator->errors());
        return Redirect::back()->withErrors($validator->errors())->withInput();
		}
		else {
			switch ($data['privilege']) {

				
				case '1':
				self::signup_doctor($data);
				break;
				case '2':
				self::signup_patient($data);
				break;
				case '3':
				self::signup_medvend($data);

				break;

				default:

				break;

			}

		}
	}

	public function signup_patient($data){ 
		$user = new User;
		$user->email = $data['email'];
		$user->level = 2;
		$user->password = Hash::make($data['password']);
		$user->save();
		$patient = new Patient;
		$patient->patient_name = $data['name'];
		$patient->email = $data['email'];
		$patient->gender = $data['gender'];
		$patient->mobile = $data['mobile'];
		$patient->age = $data['age'];
		$patient->city = $data['city'];
		$patient->save();
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return 1;
		}
		else{
			return "Registration Failed! Please Try Again...";
		}
	}


	public function signup_doctor($data){ 
		$user = new User;
		$user->email = $data['email'];
		$user->level = 2;
		$user->password = Hash::make($data['password']);
		$user->save();
		$doctor = new Doctor;
		$doctor->doc_name = $data['name'];
		$doctor->email = $data['email'];
		$doctor->gender = $data['gender'];
		$doctor->mobile = $data['mobile'];
		$doctor->age = $data['age'];
		$doctor->city = $data['city'];
		$doctor->mci = $data['mci'];
		$doctor->speciality = $data['speciality'];
		$doctor->save();
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return 1;
		}
		else{
			return "Registration Failed! Please Try Again...";
		}
	}

public function signup_doctor($data){ 
		$user = new User;
		$user->email = $data['email'];
		$user->level = 2;
		$user->password = Hash::make($data['password']);
		$user->save();
		$medvend = new MedVend;
		$medvend->mp_name = $data['name'];
		$medvend->email = $data['email'];
		$medvend->gender = $data['gender'];
		$medvend->mobile = $data['mobile'];
		$medvend->age = $data['age'];
		$medvend->city = $data['city'];
		$medvend->mci = $data['mci'];
		$medvend->speciality = $data['speciality'];
		$medvend->save();
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return 1;
		}
		else{
			return "Registration Failed! Please Try Again...";
		}
	}

}
