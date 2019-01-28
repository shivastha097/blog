<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'status'=>'required',

        ]);
        $category=new Category();
        $category->name=$name=$request->name;
        $category->status=$request->status;
        $category->slug=str_slug($name);
        $category->save();
        Session::flash('msg','New Category is successfully added.');
        return redirect()->route('admin.categories');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'  =>  'required',
            'status'=>  'required'
        ]);
        $category=Category::find($id);
        $category->name = $name = $request->name;
        $category->status = $request->status;
        $category->slug = str_slug($name);
        $category->save();

        Session::flash('msg', 'Category updated successully.');
        return redirect()->route('admin.categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('msg', 'Category Successfully Deleted.');
        return redirect()->route('admin.categories');
    }
}
