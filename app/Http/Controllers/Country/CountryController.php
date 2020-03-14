<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountryModel;
//use App\CountryModel;
use DB;
class CountryController extends Controller
{
    // country fetch data 
	public function Country(){
		return response()->json(CountryModel::get(),200);
	}
	
	//get country by id base
	
	public function CountryById($id){
		$responseData = CountryModel::where('id',$id)->first();
		$responseMessage = array();
		$responseMessage[]=[
		'status'=>200,
		'response'=>'ok',
		'message'=>'find your country',
		'data'=>$responseData
		];
		return response()->json($responseMessage);
	}
	
	// country create 
	public function CountrySave(Request $request){
		$data = $request->all();
		$old_date = date('l, F d y h:i:s');
		$dateTimestamp = strtotime($old_date);
		$CountryModel = new CountryModel;
		
		$CountryModel->iso = $data['iso'];
		$CountryModel->name = $data['name'];
		$CountryModel->dname = $data['dname'];
		$CountryModel->iso3 = $data['iso3'];
		$CountryModel->position = $data['position'];
		$CountryModel->numcode = $data['numcode'];
		$CountryModel->phonecode = $data['phonecode'];
		$CountryModel->created = $dateTimestamp;
		$CountryModel->register_by = $data['register_by'];
		$CountryModel->modified = $dateTimestamp;
		$CountryModel->modified_by = $data['modified_by'];
		$CountryModel->record_deleted = $data['record_deleted'];
		
		$CountryModel->save();
		$lastId = $CountryModel->id;
		$responseData = CountryModel::where('id',$lastId)->first();
		$responseMessage[]=[
		'status'=>200,
		'response'=>'ok',
		'lastId'=>$lastId,
		'message'=>'added a country',
		'data'=>$responseData
		];
		return response()->json($responseMessage);
	}
	
	//country update
	public function CountryUpdate(Request $request, CountryModel $country){
		
		$countryData = $request->all();
		
		/* $countryUpdate = array();
		foreach($countryData as $key=>$val){
			$countryUpdate[$key] = $val;
		} */
		//$country->update($countryUpdate);
		
		DB::table('_z_country')->where('name', $countryData['name'])->update($countryData);
		return response()->json($country,200);
		
	}
	
	//delete country
	public function CountryDelete($countryId){
		$countryDelete = CountryModel::where('id',$countryId)->delete();
		if($countryDelete){
		$responseMessage = array();
		$responseMessage[]=[
		'status'=>200,
		'response'=>'ok',
		'message'=>'deleted your country',
		];
		return response()->json($responseMessage);
		}
	}
	
}
