<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\User;
use App\Model\Post;
use Auth;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $posts = Auth::user()->posts;
        return view('user.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('user.posts.create', compact('categories'));
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
            'title' =>  'required|min:4',
            'category_id'   =>  'required',
            'status'    =>  'required',
            'image'     =>  'image|mimes:png,jpg,svg,jpeg,bmp|max:2048',
            'description'   =>  'required',
        ]);

        $post = new Post;
        $post->user_id = Auth()->id();
        $post->title = $title = $request->title;
        $post->slug = str_slug($title);
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->description = $request->description;
        if($request->hasFile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads'), $imageName);
            $post->image=$imageName;
        }
        $post->save();
        Session::flash('msg', 'Post successfully created');
        return redirect()->route('users.posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
