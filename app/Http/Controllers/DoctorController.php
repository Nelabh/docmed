<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;
use Auth;
use App\Http\Controllers\MedVendController;
use App\Http\Controllers\DoctorController;
use App\Doctor;
use App\Speciality;
use App\HealthStatus;
use App\Connection;
use App\Patient;
use Redirect;
use Illuminate\Support\Facades\Input;

class DoctorController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	public function __construct()
	{
		$this->middleware('auth');
	}
	public static function dashboard(){

		switch (Auth::user()->level) {
			case '1':
			{
				$doc=Doctor::where('email',Auth::user()->email)->first();
			$con = Connection::where('doctor_email',Auth::user()->email)->get();
			if(count($con))
			{
				foreach($con as $c)
				{
					$patient = Patient::where('email',$c->patient_email)->first();
					if($patient)
					{
					$c->problem = HealthStatus::where('id',$c->health_record)->first()->problem;
					$c->statement = HealthStatus::where('id',$c->health_record)->first()->statement;
					$c->patient = $patient;

					}

				}
			}

	if($doc->verified!=0)
				return View::make('doctor_dashboard',compact('con')); 	
			
			else
				return View::make('notverified');

			break;
			}
			
			case '2':
			return UserController::dashboard();
			break;
			case '3':

			return MedVendController::dashboard();
			break;
		/*	default:

			return Redirect::route('home');
			break;
*/		}
			
		}
		public function accept($id)
		{
			$con = Connection::where('id',$id)->first();
			$con->status+= 1;
			$con->save();/*
			$doc=Doctor::where('email',Auth::user()->email)->first();
			$con = Connection::where('doctor_email',Auth::user()->email)->get();
			if(count($con))
			{
				foreach($con as $c)
				{
					$patient = Patient::where('email',$c->patient_email)->first();
					if($patient)
					{
					$c->problem = HealthStatus::where('id',$c->health_record)->first()->problem;
					$c->statement = HealthStatus::where('id',$c->health_record)->first()->statement;
					$c->patient = $patient;

					}

				}
			}

			
			

			if($doc->verified!=0)
				return View::make('doctor_dashboard',compact('con')); 	*/
				return Redirect::route('dashboard');
		}

		public function profile_doctor(){
			if(Auth::user()->level==1)
			{
				$speciality=Speciality::all();


				$doc = Doctor::where('email',Auth::user()->email)->first();
				return View::make('profile_doctor',compact('doc','speciality'));

			}
		}
		public function edit()
		{
			if(Auth::user()->level==1)
			{
				$data=Input::all();

				$doc = Doctor::where('email',Auth::user()->email)->first();
				$doc->doc_name=$data['doc_name'];
				$doc->mobile=$data['mobile'];
				$doc->age=$data['age'];
				$doc->speciality=$data['speciality'];
				$doc->country=$data['country'];
				$doc->state=$data['state'];
				$doc->city=$data['city'];
				$doc->pincode=$data['pincode'];
				$doc->current_position=$data['current_position'];
				$doc->qualification=$data['qualification'];
				$doc->address=$data['address'];
				$doc->hospital_affiliation=$data['hospital_affiliation'];
				$doc->years_of_exp=$data['years_of_exp'];
				$doc->mci=$data['mci'];

				$doc->save();
				
				return view::make('doctor_dashboard');











			}
		}

		
	}

