<?php

namespace App\Http\Controllers;

use App\LawCase;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Case_;

class UserController extends Controller
{
    public function index()
    {
        $cases = LawCase::all();
        return view('cases',compact('cases'));
    }
    public function caseShow(Request $request)
    {
        $case = LawCase::find($request->id);
        return view('case-show',compact('case'));
    }
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
