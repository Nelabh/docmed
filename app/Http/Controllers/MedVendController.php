<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use MedWendController;
use DoctorController;
use View;
use Auth;
class MedWendController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

public function __construct()
{
    $this->middleware('auth');
}
public function dashboard(){

		switch (Auth::user()->level) {
			case '1':
			return DoctorController::dashboard();
			break;
			case '2':
			return UserController::dashboard();
			break;
			case '3':
			return View::make('vendor_dashboard');

			break;
		/*	default:

			return Redirect::route('home');
			break;
*/		}
		
	}



}
