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
use Auth;
use App\Doctor;
use App\Patient;
use App\MedVend;
use App\User;
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
			$name = Patient::where('email',Auth::user()->email)->first()->patient_name;
			if(Patient::where('email',Auth::user()->email)->first()->first == 0){
				$speciality = Speciality::all();
				return View::make('patient_dashboard_first',compact('name','speciality'));
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
		//$result = array();
			if($data != ""){
				$doc = Doctor::where('email',$data)->orWhere('doc_name','like','%'.$data.'%')->orderBy('doc_id')->get()->toArray();
				if(Speciality::where('speciality_name',$data)->first()){
					$doc2 = Doctor::where('speciality',Speciality::where('speciality_name',$data)->first()->id)->orderBy('doc_id')->get()->toArray();
					$b = count($doc2);
				}

				$a = count($doc);

				$result = array(); 
				if((!empty($doc) && !empty($doc2))){
					$i=0;
					$j=0;
					$k=0;
					while (($i < $a) ||($j < $b)) {
						if($doc[$i]->id < $doc2[$j]->id){
							$result[] = $doc[$i];
							$i++;
						}else if($doc[$i]->id > $doc2[$j]->id){
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
		//	dd($result);
			return View::make('search',compact('name','speciality','result','data'));
		}

	}

