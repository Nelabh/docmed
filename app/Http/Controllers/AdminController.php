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
use App\MedVend;
use App\Pathology;
use Response;
use Redirect;
use Illuminate\Support\Facades\Input;
class AdminController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function verify_doctor(){
		if(Auth::user()->level>4)
		return View::make('admin\verify_doctor');
	return Redirect::route('home');
	}
	public function verify_pathologist(){
		if(Auth::user()->level>4)
		return View::make('admin\verify_pathologist');
	return Redirect::route('home');

	}
	public function verify_vendor(){
		if(Auth::user()->level>4)
		return View::make('admin\verify_vendor');
	return Redirect::route('home');

	}
	public function admin_dashboard(){
		if(Auth::user()->level>4)
	return View::make('admin\admin_dashboard');
	return Redirect::route('home');

	}
	
	public function edit_doctor(){
		$data = Doctor::all();
		if(Auth::user()->level>4)
	return View::make('admin\edit_doctor',compact('data'));
	return Redirect::route('home');

	}
	public function edit_vendor(){
		$data = MedVend::all();
		if(Auth::user()->level>4)
			return View::make('admin\edit_vendor',compact('data'));
	return Redirect::route('home');

	}
	public function edit_pathologist(){
		$data = Pathology::all();
		if(Auth::user()->level>4)
		return View::make('admin\edit_pathologist',compact('data'));
	return Redirect::route('home');

	}
	public function delete_doctor($id)
	{
		$doc=Doctor::where('id',$id)->first();
		$doc->delete();
		if(Auth::user()->level>4)
			return Redirect::to('admin\verify-doctor')->with('message','Successfully deleted');
	return Redirect::route('home');

	}
	public function delete_vendor($id)
	{
		$med=MedVend::where('id',$id)->first();
		$med->delete();
		return Redirect::to('admin\verify-vendor')->with('message','Successfully deleted');

	}
	public function delete_pathologist($id)
	{
		$path=Pathology::where('id',$id)->first();
		$path->delete();
		return Redirect::to('admin\verify-pathologist')->with('message','Successfully deleted');

	}


	public function verify_d($id)
	{
		$doc=Doctor::where('id',$id)->first();
		
		$doc->verified=1;

		$doc->save();


		return Redirect::to('admin\verify-doctor')->with('message','Successfully verified');
	}   
	public function verify_v($id)
	{
		$med = MedVend::where('id',$id)->first();
		
		$med->verified=1;

		$med->save();


		return Redirect::to('admin\verify-vendor')->with('message','Successfully verified');
	}  
	public function verify_p($id)
	{
		$path=Pathology::where('id',$id)->first();
		
		$path->verified=1;

		$path->save();


		return Redirect::to('admin\verify-pathologist')->with('message','Successfully verified');
	}    

     public function getdata(){
	   $data = array();
	   $doctor = Doctor::where('verified',0)->get();
	      foreach ($doctor as $doc) {
		     $data[] = array("name" => $doc->doc_name,"email" => $doc->email,"contact" => $doc->mobile,"age" => $doc->age,"speciality" => $doc->speciality,"qualification"=>$doc->qualification,"hospital_affiliation"=>$doc->hospital_affiliation,"y_o_e"=>$doc->years_of_exp,"mci"=>$doc->mci,"current_position"=>$doc->current_position,"action"=>"<a href= ".route('delete_doctor',$doc->id)." class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</a> <a href= ".route('verify_d',$doc->id)." class='btn btn-xs btn-success pull-right'>Verify</a> ");

	      }    	

	
	 return response()->json(['data'=>$data]);
   }
   public function getdatamv(){
	   $data = array();
	   $medpro = MedVend::where('verified',0)->get();
	      foreach ($medpro as $mp) {
		     $data[] = array("name" => $mp->mp_name,"email" => $mp->email,"contact" => $mp->mobile,"age" => $mp->age,"qualification"=>$mp->qualification,"shop_name"=>$mp->shop_name,"mci"=>$mp->mci,"city"=>$mp->city,"action"=>"<a href= ".route('delete_vendor',$mp->id)." class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</a> <a href= ".route('verify_v',$mp->id)." class='btn btn-xs btn-success pull-right'>Verify</a> ");

	      }    	

	
	 return response()->json(['data'=>$data]);
   }

   public function getdatap(){
	   $data = array();
	   $path = Pathology::where('verified',0)->get();
	      foreach ($path as $p) {
		     $data[] = array("name" => $p->name,"email" => $p->email,"contact" => $p->mobile,"age" => $p->age,"qualification"=>$p->qualification,"shop_name"=>$p->shop_name,"mci"=>$p->mci,"city"=>$p->city,"action"=>"<a href= ".route('delete_pathologist',$p->id)." class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</a> <a href= ".route('verify_p',$p->id)." class='btn btn-xs btn-success pull-right'>Verify</a> ");

	      }    	

	
	 return response()->json(['data'=>$data]);
   }
   public function editdoctor($id)
   {
   		 $data = Input::all();
   		 $doc = Doctor::where('id','=',$id)->first();
   		 $doc->doc_name = $data['name'];
   		 $doc->age = $data['age'];
   		 $doc->qualification=$data['qualification'];
   		 $doc->years_of_exp=$data['years_of_exp'];
   		 $doc->mci=$data['mci'];
   		 $doc->mobile=$data['mobile'];
   		 $doc->save();

		return Redirect::to('admin\edit-doctor')->with('message','Successfully edited');
   		     
   }

    public function editvendor($id)
   {
   		 $data = Input::all();
   		 $mp =MedVend::where('id','=',$id)->first();
   		 $mp->mp_name = $data['name'];
   		 $mp->age = $data['age'];
   		 $mp->qualification=$data['qualification'];
   		 $mp->shop_name=$data['shop_name'];
   		 $mp->mci=$data['mci'];
   		 $mp->mobile=$data['mobile'];
   		 $mp->save();

		return Redirect::to('admin\edit-vendor')->with('message','Successfully edited');
   		     
   }

    public function editpathologist($id)
   {
   		 $data = Input::all();
   		 $doc = Pathology::where('id','=',$id)->first();
   		 $doc->name = $data['name'];
   		 $doc->age = $data['age'];
   		 $doc->qualification=$data['qualification'];
   		 $doc->shop_name=$data['shop_name'];
   		 $doc->mci=$data['mci'];
   		 $doc->mobile=$data['mobile'];
   		 $doc->save();

		return Redirect::to('admin\edit-pathologist')->with('message','Successfully edited');
   		     
   }




   
}

