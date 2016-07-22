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
	
	
}

