<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;
use DB;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PathologyController;
use App\Http\Controllers\MedVendController;
use Session;
use Auth;
use App\Doctor;
use App\Patient;
use App\MedVend;
use App\User;
class UserController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	public function __construct()
	{
		$this->middleware('auth');
	}
	public static function dashboard(){
	//	dd(Auth::user()->level);
		switch (Auth::user()->level) {
			case '1':
			return DoctorController::dashboard();
			break;
			case '2':
			$name = Patient::where('email',Auth::user()->email)->first()->patient_name;
			return View::make('patient_dashboard',compact('name'));
			break;
			case '3':
			return MedVendController::dashboard();
			break;
			case '4':
			return PathologyController::dashboard();
			break;
		/*	default:

			return Redirect::route('home');
			break;
*/		}
	}
	public function dashboard2(){
		return View::make('patient_dashboard2');
	}


}

