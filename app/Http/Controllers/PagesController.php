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
use App\Pathology;
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
			if(Auth::user()->level > 4){
				Auth::logout();
				Session::forget('email');
				return Redirect::route('admin_login');
			}
			else{
				Auth::logout();
				Session::forget('email');
				return Redirect::route('home');
			}
		}
		return Redirect::route('home'); 

	}
	public function log(){
		$data = array('email'=>Input::get('email'),'password'=>Input::get('password'),'level'=>Input::get('level'));
		$rules=array(
			'email' => 'required',
			'password' => 'required',
			'level' => 'required'
			);
		$validator = Validator::make($data, $rules);
		if($validator->fails()){

			return Redirect::back()->withErrors($validator->errors())->withInput();
		}
		else {
			if(Auth::attempt($data)){
				Session::put('email',$data['email']);
				return Redirect::intended('dashboard');
			}
			else{
				return Redirect::route('home')->with('message','Your email/password combination is incorrect!')->withInput();
			}
		}
	}
	public function logadmin(){
		$data = array('email'=>Input::get('email'),'password'=>Input::get('password'));
		$rules=array(
			'email' => 'required',
			'password' => 'required'
			
			);
		$validator = Validator::make($data, $rules);
		if($validator->fails()){

			return Redirect::back()->withErrors($validator->errors())->withInput();
		}
		else {
			if(Auth::attempt($data)){
				Session::put('email',$data['email']);
				return Redirect::route('admin_dashboard');
			}
			else{
				return Redirect::route('admin_login')->with('message','Your email/password combination is incorrect!')->withInput();
			}
		}
	}
	public function signupform_doctor(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			$speciality = Speciality::All();
			return View::make('signup_doc',compact('speciality'));
		}
	}

	public function signupform_patient(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			return View::make('signup_pat');
		}
	}
	public function signupform_medvend(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			$speciality = Speciality::All();
			return View::make('signup_med');
		}
	}

	public function signupform_pathology(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		else{
			$speciality = Speciality::All();
			return View::make('signup_pathology');
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
				case '4':
				return self::signup_pathology($data);
				break;
				default:
				break;
			}

		}
	}
	public function signup_pathology($data){
		$user = new User;
		$user->email = $data['email'];
		$user->level = 4;
		$user->password = Hash::make($data['password']);
		$user->save();
		$pathology = new Pathology;
		$pathology->name = $data['name'];
		$pathology->email = $data['email'];
		$pathology->gender = $data['gender'];
		$pathology->mobile = $data['mobile'];
		$pathology->country = $data['country'];
		$pathology->state = $data['state'];
		$pathology->city = $data['city'];
		$pathology->mci = $data['registration'];
		$pathology->save();
		
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('home')->with('message','Login Failed!!! Please Try Again!!!');
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
		$patient->bloodgroup = $data['bloodgroup'];
		$patient->country = $data['country'];
		$patient->state = $data['state'];
		$patient->city = $data['city'];
		$patient->save();
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('home')->with('message','Login Failed!!! Please Try Again!!!');
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
		$doctor->country = $data['country'];
		$doctor->state = $data['state'];
		$doctor->city = $data['city'];
		$doctor->mci = $data['mci'];
		$doctor->speciality = Speciality::where('id',$data['speciality'])->first()->id;
		$doctor->save();
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('home')->with('message','Login Failed!!! Please Try Again!!!');
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
		$medvend->country = $data['country'];
		$medvend->state = $data['state'];
		$medvend->city = $data['city'];
		$medvend->mci = $data['registration'];
		$medvend->save();
		if(Auth::login($user)){
			Session::put('email',$data['email']);
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('home');
		}

	}

/*
******************
***ADMIN ROUTE****
******************
*/

public function admin(){
	if(Auth::check()){
		if(Auth::user()->level > 4)
			return Redirect::route('admin_dashboard');
		else
			return Redirect::route('dashboard');

	}
	return View::make('admin\home');

}
public function notverified(){

	return view::make('notverified');
	
}



}
