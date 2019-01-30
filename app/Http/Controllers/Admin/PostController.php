<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use App\User;
use Carbon\Carbon;
use Session;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth()->id());
        $posts = Post::all();
        return view('admin.posts.index', compact(['posts', 'user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status','active')->get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required|min:5|max:60',
            'category_id'  => 'required',
            'description'   =>  'required',
            'image'         =>  'image|mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);

        $post = new Post;
        $post->user_id = Auth()->id();
        $post->title = $title = $request->title;
        $post->slug = str_slug($title);
        $post->description = $request->description;
        $post->category_id  = $request->category_id;
        $post->status = $request->status;

        if($request->hasFile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads'), $imageName);
            $post->image=$imageName;
        }

        $post->save();
        Session::flash('msg', 'New post successfully added');
        return redirect()->route('admin.posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.posts.edit', compact(['post', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>  'required|min:5|max:60',
            'category_id'   =>  'required',
            'status'    =>  'required',
            'description'   =>  'required',
            'image'     =>  'image|mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->description = $request->description;
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path('uploads'), $name); 
            $post->image = $name;             
        }   
        $post->save();
        Session::flash('msg', 'Post is successfully updated');
        return redirect()->route('admin.posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('msg', 'Post deleted successfully');
        return redirect()->route('admin.posts');
    }
}
