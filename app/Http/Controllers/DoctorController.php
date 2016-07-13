<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;
use Auth;
use App\Http\Controllers\MedWendController;
use App\Http\Controllers\DoctorController;
use App\Doctor;
use Redirect;
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

	
}

