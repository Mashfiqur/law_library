<?php

namespace App\Http\Controllers;

use App\Category;
use App\LawCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        return view('admin.category_edit',compact('category'));
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

        if($category->LawCases)
        {
            foreach ($category->LawCases as $law_case)
            {
                $law_case->delete();
            }
        }
        $category->delete();
        SweetAlert::success('Category Deleted', 'Category Deleted');
        return redirect('admin/categories');
    }
    public function LawCases()
    {
        $law_cases = LawCase::all();
        $categories = Category::all();
        return view('admin.law_cases', compact('law_cases','categories'));
    }
    public function addLawCase()
    {
        $categories = Category::all();
        return view('admin.law_case_add',compact('categories'));
    }

    public function postLawCase(Request $request)
    {
        $law_case = new LawCase();
        $law_case->title = $request->title;
        $law_case->category_id = $request->category_id;
        $law_case->description = $request->description;
        if($request->pdf)
        {
            $fileName = $request->file('pdf');
            $fileName = time().'.'.$fileName->getClientOriginalExtension();
            $request->pdf->move(public_path('/pdfs'), $fileName);
            $law_case->pdf = $fileName;
        }
        $law_case->created_by = session('name');
        $law_case->updated_by = session('name');
        $law_case->save();
        SweetAlert::success('LawCase Created', $law_case->title.' has been added');
        return redirect('admin/law-cases');
    }
    public function editLawCase(Request $request)
    {
        $law_case = LawCase::find($request->id);
        $categories = Category::all();
        return view('admin.law_case_edit',compact('law_case', 'categories'));
    }
    public function updateLawCase(Request $request)
    {
        $law_case = LawCase::find($request->id);
        $law_case->title = $request->title;
        $law_case->category_id = $request->category_id;
        $law_case->description = $request->description;
        if($request->pdf)
        {
            $fileName = $request->file('pdf');
            $fileName = time().'.'.$fileName->getClientOriginalExtension();
            $request->pdf->move(public_path('/pdfs'), $fileName);
            $law_case->pdf = $fileName;
        }
        $law_case->updated_by = session('name');
        $law_case->update();
        SweetAlert::success('LawCase Edited', 'LawCase Edited');
        return redirect('admin/law-cases');
    }
    public function deleteLawCase(Request $request)
    {
        $law_case = LawCase::find($request->id);


        $law_case->delete();
        SweetAlert::success('LawCase Deleted', 'LawCase Deleted');
        return redirect('admin/law-cases');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
