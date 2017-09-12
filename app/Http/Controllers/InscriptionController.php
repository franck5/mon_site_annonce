<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inscription;

class InscriptionController extends Controller
{
	public function Savebdd(Request $request){
		$user = new inscription;
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->photo = $request->input('file');
		$user->save();
		
	}
}
