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
			 $doc=Doctor::where('email',Auth::user()->email)->first();
			 if($doc->verified==0)
			 	return View::make('notverified');
			 else
				return View::make('doctor_dashboard');
			break;
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

