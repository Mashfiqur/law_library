<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
	public function show()
	{
		return view ('signup');
	}
	public function signUp(Request $request)
	{

	// print_r($request->input());

		

	/*$validatedData = $request->validate([
	    'first_name' => 'required',
	    'last_name' => 'required',
	    'email' => 'required|email',
	    'password' => 'required',
	    'occupation' => 'required',
	    'phone' => 'required'
	]);*/

	$user = new User;
	$user->first_name = $request->first_name;
	$user->last_name = $request->last_name;
	$user->email = $request->email;
	$user->password = bcrypt($request->password);
	$user->occupation = $request->occupation;
	$user->phone = $request->phone;
	$user->save();

	return 'User Account Created';


	}


	public function loginForm()
	{
		return view('login');
	}

	public function login(Request $request)
	{
		$email 	  = $request->email;
		$password = $request->password;

		

		$user = User::where('email',$email)
					->where('password',$password)
					->first();

		return 'Hello '.$user->first_name;


	}
    
    
}
   


