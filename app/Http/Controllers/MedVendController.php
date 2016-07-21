<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use View;
use Auth;
use App\Doctor;
use App\MedVend;
use App\Speciality;
use Redirect;
use Illuminate\Support\Facades\Input;
class MedVendController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

public function __construct()
{
    $this->middleware('auth');
}
public static function dashboard(){

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
	public function profile_vendor(){
		if(Auth::user()->level==3)
		{
			$mv=MedVend::where('email',Auth::user()->email);
			return View::make('profile_vendor',compact('mv'));
		}
	}
	
	public function edit_vend()
	{
		if(Auth::user()->level==3)
		{
			$data=Input::all();

			$mv = MedVend::where('email',Auth::user()->email)->first();
			$mv->mp_name=$data['mp_name'];
			$mv->mobile=$data['mobile'];
			$mv->age=$data['age'];
			$mv->country=$data['country'];
			$mv->state=$data['state'];
			$mv->city=$data['city'];
			$mv->pincode=$data['pincode'];
			$mv->qualification=$data['qualification'];
			$mv->address=$data['address'];
			$mv->shop_name=$data['shop_name'];
			$mv->save();
			
			return view::make('vendor_dashboard');











		}
	}

	
}

