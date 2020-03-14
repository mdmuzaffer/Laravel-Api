<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;

class ApiController extends Controller
{
	 public function tokenVerifey($header,$token){
		if($header !="" && $token !=""){
			$auth = Auth::get()->toArray();
			if($header== $auth[0]['user_key'] && $token== $auth[0]['token']){
				$responseMessage[]=[
				'status'=>200,
				'response'=>'ok',
				'message'=>'Your token is Correct',
				'data'=>$auth,
				];
				return $responseMessage;
			}else{
				$responseMessage[]=[
				'status'=>401,
				'response'=>'ok',
				'message'=>'Your token is Invalid',
				];
				return $responseMessage;
				exit;
			}
		}else{
			$responseMessage[]=[
			'status'=>404,
			'response'=>'ok',
			'message'=>'Token is blank',
			];
			return $responseMessage;
		}
	 }
	
    public function user(Request $request){
		$header = $request->header('Users-key');
		$token = $request->header('Token');
		$data = $this->tokenVerifey($header,$token);
		
		if($data[0]['status'] ===200){
			return $this->tokenVerifey($header,$token);
			echo "Here use continue coding";
		}else{
			return $this->tokenVerifey($header,$token);
		}
		
	}
}
