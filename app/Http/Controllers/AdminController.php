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
use App\Http\Controllers\MedVendController;
use Session;
use Auth;
class AdminController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function verify_doctor(){
		return View::make('admin\verify_doctor');
	}
	public function admin_dashboard(){
		return View::make('admin\admin_dashboard');
	}
}

