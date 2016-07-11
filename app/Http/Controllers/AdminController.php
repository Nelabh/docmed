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
use App\Doctor;
use Response;
use Redirect;
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
	public function verify_vendor(){


		return View::make('admin\verify_vendor');
	}
	public function edit_doctor(){
		return View::make('admin\edit_doctor');
	}
	public function delete_doctor($id)
	{
		$doc=Doctor::where('id',$id)->first();
		$doc->delete();
		return Redirect::to('admin\verify-doctor')->with('message','Successfully deleted');

	}


	public function verify_d($id)
	{
		$doc=Doctor::where('id',$id)->first();
		
		$doc->verified=1;

		$doc->save();


		return Redirect::to('admin\verify-doctor')->with('message','Successfully verified');
	}   

public function getdata(){
	$data = array();
	$doctor = Doctor::where('verified',0)->get();
	foreach ($doctor as $doc) {
		$data[] = array("name" => $doc->doc_name,"email" => $doc->email,"contact" => $doc->mobile,"age" => $doc->age,"speciality" => $doc->speciality,"qualification"=>$doc->qualification,"hospital_affiliation"=>$doc->hospital_affiliation,"y_o_e"=>$doc->years_of_exp,"mci"=>$doc->mci,"current_position"=>$doc->current_position,"action"=>"<a href= ".route('delete_doctor',$doc->id)." class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</a> <a href= ".route('verify_d',$doc->id)." class='btn btn-xs btn-success pull-right'>Verify</a> ");

	}    	

	
	return response()->json(['data'=>$data]);
}


}

