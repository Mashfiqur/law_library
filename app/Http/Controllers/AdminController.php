<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use UxWeb\SweetAlert\SweetAlert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function categories()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    public function addCategory()
    {
        return view('admin.category_add');
    }

    public function postCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        SweetAlert::success('Category Created', $category->name.' has been added');
        return redirect('admin/categories');
    }
    public function editCategory(Request $request)
    {
        $category = Category::find($request->id);
        return view('admin.case_edit',compact('category'));
    }
    public function updateCategory(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->update();
        SweetAlert::success('Category Edited', 'Category Edited');
        return redirect('admin/categories');
    }
    public function deleteCategory(Request $request)
    {
        $category = Category::find($request->id);

        if($category->cases)
        {
            foreach ($category->cases as $case)
            {
                $case->delete();
            }
        }
        $category->delete();
        SweetAlert::success('Category Deleted', 'Category Deleted');
        return redirect('admin/categories');
    }
    public function cases()
    {
        $cases = Category::all();
        return view('admin.cases', compact('cases'));
    }
    public function addCase()
    {
        return view('admin.case_add');
    }

    public function postCase(Request $request)
    {
        $case = new Case();
        $case->name = $request->name;
        $case->save();
        SweetAlert::success('Case Created', $case->name.' has been added');
        return redirect('admin/cases');
    }
    public function editCase(Request $request)
    {
        $case = Case::find($request->id);
        return view('admin.case_edit',compact('case'));
    }
    public function updateCase(Request $request)
    {
        $case = Case::find($request->id);
        $case->name = $request->name;
        $case->update();
        SweetAlert::success('Case Edited', 'Case Edited');
        return redirect('admin/cases');
    }
    public function deleteCase(Request $request)
    {
        $case = Case::find($request->id);


        $case->delete();
        SweetAlert::success('Case Deleted', 'Case Deleted');
        return redirect('admin/cases');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
