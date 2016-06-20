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
use Redirect;
use App\Speciality;
use Auth;
use Hash;
use View;
use Session;
class PagesController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	
	public function home(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			return View::make('home');
		}
	}
	public function logout(){
		if(Auth::check()){
			Auth::logout();
			Session::forget('email');
		}
		return Redirect::route('home');
	}
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

	public function signupform_doctor(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			return View::make('signup_doc',compact('speciality'));
		}
	}

	public function signupform_patient(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			$speciality = Speciality::All();
			return View::make('signup_pat',compact('speciality'));
		}
	}
	public function signupform_medvend(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			$speciality = Speciality::All();
			return View::make('signup_med',compact('speciality'));
		}
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

   		//return json_encode($validator->errors());
			return Redirect::back()->withErrors($validator->errors())->withInput();
		}
		else {
			switch ($data['privilege']) {

				
				case '1':
				return self::signup_doctor($data);
				break;
				case '2':
				return self::signup_patient($data);
				break;
				case '3':
				return self::signup_medvend($data);
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
		$user->level = 1;
		$user->password = Hash::make($data['password']);
		$user->save();
		$doctor = new Doctor;
		$doctor->doc_name = $data['name'];
		$doctor->email = $data['email'];
		$doctor->gender = $data['gender'];
		$doctor->mobile = $data['mobile'];
		$doctor->city = $data['city'];
		$doctor->mci = $data['mci'];
		$doctor->speciality = Speciality::where('id',$data['speciality'])->first()->id;
		$doctor->save();
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('home');
		}
	}

	public function signup_medvend($data){ 
		$user = new User;
		$user->email = $data['email'];
		$user->level = 3;
		$user->password = Hash::make($data['password']);
		$user->save();
		$medvend = new MedVend;
		$medvend->mp_name = $data['name'];
		$medvend->email = $data['email'];
		$medvend->gender = $data['gender'];
		$medvend->mobile = $data['mobile'];
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
