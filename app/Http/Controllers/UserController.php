<?php

namespace App\Http\Controllers;

use App\Category;
use App\LawCase;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Case_;

class UserController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }
    public function index()
    {
        $cases = LawCase::all();
        $categories = Category::all();
        return view('cases',compact('cases','categories'));
    }
    public function casesByCategory(Request $request)
    {
        if(!session('name'))
        {
           return redirect('/login');
        }
        $category = Category::find($request->id);
        $cases = $category->LawCases;
        $categories = Category::all();
        return view('cases',compact('cases','categories'));
    }
    public function caseShow(Request $request)
    {
        $case = LawCase::find($request->id);
        $categories = Category::all();
        return view('case-show',compact('case','categories'));
    }
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
    public function about()
    {
        $cases = LawCase::all();
        $categories = Category::all();
        return view('about',compact('cases','categories'));
    }
}
