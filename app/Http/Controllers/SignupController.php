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
	$user->password = $request->password;
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
					->first();
        if(!$user)
        {
            return redirect()->back()->withErrors(['No user associated with this email']);
        }
        if(Hash::check($password,$user->password))
        {
            session(['email' => $email]);
            session(['name' => $user->first_name]) ;
            session(['role' => $user->occupation]) ;
            if($user->occupation=='admin')
            {
                return redirect('admin/home');
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect()->back()->withErrors(['Wrong Email/Password']);

        }



	}


}



