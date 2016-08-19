<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PathologyController;
use App\Http\Controllers\MedVendController;
use Session;
use Redirect;
use Auth;
use App\Doctor;
use App\Connection;
use App\Patient;
use App\MedVend;
use App\Review;
use App\User;
use App\HealthStatus;
use App\Speciality;
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
			$patient = Patient::where('email',Auth::user()->email)->first();
			$name = $patient->name;
			if(Patient::where('email',Auth::user()->email)->first()->first == 0){
				$speciality = Speciality::all();
				$result = Doctor::where('city',$patient->city)->orWhere('state',$patient->state)->get()->toArray();
				if(count($result)){

					foreach ($result as $res) {
						if(count(Review::where('doctor_email',$res['email'])->get())){
							$sum = Review::where('doctor_email',$res['email'])->sum('stars');
							$count = Review::where('doctor_email',$res['email'])->count();
							if($count)
								$review = array("".$res['email'].""=>intval($sum/$count));
							else
								$review = array("".$res['email'].""=>0); 
						}
					}

				}
				else{
					$review = [];
				}

				return View::make('patient_dashboard_first',compact('name','speciality','result','review'));
			}
			else{
				return View::make('patient_dashboard',compact('name'));
			}
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

		public function search(){
			$data = Input::get('query');
			$name = Patient::where('email',Auth::user()->email)->first()->patient_name;
			$speciality = Speciality::all();
			$a=$b=0;
			if($data != ""){
				$doc = Doctor::where('email',$data)->orWhere('doc_name','like','%'.$data.'%')->orderBy('id')->get()->toArray();
				$doc2 = array();
				if(Speciality::where('speciality_name',$data)->first()){
					$doc2 = Doctor::where('speciality',Speciality::where('speciality_name',$data)->first()->id)->orderBy('id')->get()->toArray();
					$b = count($doc2);
				}

				$a = count($doc);

				$result = array(); 
				if((!empty($doc) && !empty($doc2))){
					$i=0;
					$j=0;
					$k=0;
					while (($i < $a) ||($j < $b)) {
						if($doc[$i]['id'] < $doc2[$j]['id']){
							$result[] = $doc[$i];

							$i++;
						}else if($doc[$i]['id'] > $doc2[$j]['id']){
							$result[] = $doc2[$j];
							$j++;
						}else{
							$result[] = $doc2[$j];
							$i++;
							$j++;
						}
					}
				}
				else{
					if(empty($doc))
						$result = $doc2;
					else 
						$result = $doc;
				}
			}
			else{
				$result = Doctor::all();
			}
			$review = array();
			foreach ($result as $res) {
				if(count(Review::where('doctor_email',$res['email'])->get())){
					$sum = Review::where('doctor_email',$res['email'])->sum('stars');
					$count = Review::where('doctor_email',$res['email'])->count();
					if($count)
						$review = array("".$res['email'].""=>intval($sum/$count));
					else
						$review = array("".$res['email'].""=>0); 
				}
			}
			return View::make('search',compact('name','speciality','result','data','review'));
		}

		public function profile($id){
			$name = Patient::where('email',Auth::user()->email)->first()->patient_name;
			$doctor = Doctor::where('id',$id)->first();
			$doctor->speci = Speciality::where('id',$doctor->speciality)->first()->speciality_name;
			$sum = Review::where('doctor_email',$doctor->email)->sum('stars');
			$count = Review::where('doctor_email',$doctor->email)->count();
			if($count)
				$stars = intval($sum/$count);
			else
				$stars = 0;
			$doctor->stars = $stars;
			$doctor->tot_review = $count;
			$review = Review::where('doctor_email',$doctor->email)->get();
			foreach ($review as $rev) {
				$rev->name = User::where('email',$rev->patient_email)->first()->patient_name;
			}
			$conn = Connection::where('patient_email',Auth::user()->email)->where('doctor_email',Doctor::where('id',$id)->first()->email)->first();
			if(count($conn)){
				$connection = $conn->status;
				$health = HealthStatus::where('id',$conn->health_record)->first();
			}
			else{
				$connection = -1;
				$health = "";

			}
			$health_status = HealthStatus::where('email',Auth::user()->email)->orderBy('created_at','desc')->first();
			return View::make('profile',compact('name','doctor','review','stars','connection','health_status','health'));
		}
		public function basic_info()
		{
			$patient = Patient::where('email',Auth::user()->email)->first();
			$name = Patient::where('email',Auth::user()->email)->first()->patient_name;
			return View::make('basic_info',compact('name','patient'));	
		}
		public function edit_patientinfo(){
			$data = Input::all();
			$patient = Patient::where('email',Auth::user()->email)->first();
			$patient->patient_name = $data['name'];
			$patient->mobile = $data['mobile'];
			$patient->gender = $data['gender'];
			$patient->age = $data['age'];
			$patient->bloodgroup = $data['bloodgroup'];
			$patient->occupation = $data['occupation'];
			$patient->address = $data['address'];
			$patient->city = $data['city'];
			$patient->state = $data['state'];
			$patient->country = $data['country'];
			$patient->pincode = $data['pincode'];
			$patient->save();
			return Redirect::route('basic_info');
		}
		public function health_status(){
			if(Auth::user()->level == 2 ){
				$health_status = HealthStatus::where('email',Auth::user()->email)->orderBy('created_at','desc')->get();
				$name = Patient::where('email',Auth::user()->email)->first()->patient_name;
				return View::make('health_status',compact('name','health_status'));
			}
			else{
				return Redirect::route('dashboard');
			}
		}
		public function edit_healthstatus(){
			if(Auth::user()->level == 2 ){
				$data = Input::all();
				$health_status = new HealthStatus;
				$health_status->problem = $data['problem'];
				$health_status->statement = $data['statement'];
				$health_status->email = Auth::user()->email;
				$health_status->save();
				return Redirect::route('health_status')->with('message','Successfully Addded');
			}
			else{
				return Redirect::route('dashboard');
			}
		}
		public function consult(){
			$data = Input::all();
			$health_status = HealthStatus::where('email',Auth::user()->email)->orderBy('created_at','desc')->first();

			if(count($health_status)){
				if(strcmp($health_status->problem,$data['problem']) || strcmp($health_status->statement,$data['statement'])){
					$health_status = new HealthStatus;
					$health_status->problem = $data['problem'];
					$health_status->statement = $data['statement'];
					$health_status->email = Auth::user()->email;
					$health_status->save();
				}
			}
			else{
				$health_status = new HealthStatus;
				$health_status->problem = $data['problem'];
				$health_status->statement = $data['statement'];
				$health_status->email = Auth::user()->email;
				$health_status->save();
			}
			$connection = new Connection;
			$connection->patient_email = Auth::user()->email;
			$connection->doctor_email = Doctor::where('id',$data['id'])->first()->email;
			$connection->status = 0;
			$connection->health_record = $health_status->id;
			$connection->save();
			return Redirect::back();
		}

		public function urgentconsult(){
			$data = Input::all();
			$health_status = HealthStatus::where('email',Auth::user()->email)->orderBy('created_at','desc')->first();

			if(count($health_status)){
				if(strcmp($health_status->problem,$data['problem']) || strcmp($health_status->statement,$data['statement'])){
					$health_status = new HealthStatus;
					$health_status->problem = $data['problem'];
					$health_status->statement = $data['statement'];
					$health_status->email = Auth::user()->email;
					$health_status->save();
				}
			}
			else{
				$health_status = new HealthStatus;
				$health_status->problem = $data['problem'];
				$health_status->statement = $data['statement'];
				$health_status->email = Auth::user()->email;
				$health_status->save();
			}
			$connection = new Connection;
			$connection->patient_email = Auth::user()->email;
			$connection->doctor_email = Doctor::where('id',$data['id'])->first()->email;
			$connection->status = 6;
			$connection->health_record = $health_status->id;
			$connection->save();
			return Redirect::back();
		}
		public function updateconsult(){
			$data = Input::all();
			$connection = Connection::where('patient_email',Auth::user()->email)
			->where('doctor_email',Doctor::where('id',$data['id'])->first()->email)->first();
			$health_status = HealthStatus::where('id',$connection->health_record)->first();
			if(strcmp($health_status->problem,$data['problem']) || strcmp($health_status->statement,$data['statement'])){
				$health_status = new HealthStatus;
				$health_status->problem = $data['problem'];
				$health_status->statement = $data['statement'];
				$health_status->email = Auth::user()->email;
				$health_status->save();
			}
			$connection->health_record = $health_status->id;
			$connection->save();
			return Redirect::back();
		}
	}


