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
        return view('admin.categories.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
