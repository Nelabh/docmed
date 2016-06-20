<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;
use DB;
use DoctorController;
use MedVendController;
use Session;
use Auth;
class UserController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

	public function dashboard(){
	//	dd(Auth::user()->level);
		switch (Auth::user()->level) {
			case '1':
			return DoctorController::dashboard();
			break;
			case '2':
			return View::make('patient_dashboard');
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

