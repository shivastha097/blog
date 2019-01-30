<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'name'  =>  'required',
            'avatar' =>  'image|mimes:png,jpg,bmp,jpeg,svg|max:2048',
            'address'   =>  'nullable|min:4',
            'contact_no'   =>   'nullable|numeric',
            'facebook_url'  =>  'nullable|url',
            'twitter_url'   =>  'nullable|url',
            'linkedin_url'  =>  'nullable|url',
            'description'   =>  'min:5',
            'email'         =>  'required|email'
        ]);

        $user = new User;
        $user->name = $name = $request->name;
        $user->slug = str_slug($name);
        $user->address = $request->address;
        $user->contact_no = $request->contact_no;
        $user->email = $request->email;
        $user->facebook_url = $request->facebook_url;
        $user->twitter_url = $request->twitter_url;
        $user->linkedin_url =  $request->linkedin_url;
        $user->description = $request->description;
        $user->status = $request->status;
        if($request->hasFile('avatar')){
            $imageName = time().'.'.request()->avatar->getClientOriginalExtension();
            request()->avatar->move(public_path('uploads/users'), $imageName);
            $user->avatar=$imageName;
        }
        $user->save();

        Session::flash('msg', 'New user created successfully');
        return redirect()->route('admin.users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
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
            'name'  =>  'required',
            'avatar' =>  'image|mimes:png,jpg,bmp,jpeg,svg|max:2048',
            'address'   =>  'nullable|min:4',
            'contact_no'   =>   'nullable|numeric',
            'facebook_url'  =>  'nullable|url',
            'twitter_url'   =>  'nullable|url',
            'linkedin_url'  =>  'nullable|url',
            'description'   =>  'min:5',
            'email'         =>  'required|email'
        ]);

        $user = User::find($id);
        $user->name = $name = $request->name;
        $user->slug = str_slug($name);
        $user->address = $request->address;
        $user->contact_no = $request->contact_no;
        $user->email = $request->email;
        $user->facebook_url = $request->facebook_url;
        $user->twitter_url = $request->twitter_url;
        $user->linkedin_url =  $request->linkedin_url;
        $user->description = $request->description;
        $user->status = $request->status;
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $imageName = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path('uploads/users'), $imageName); 
            $user->avatar = $imageName;
        }
        $user->save();

        Session::flash('msg', 'Profile updated successfully');
        return redirect()->route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('msg', 'User deleted successfully.');
        return redirect()->route('admin.users');
    }

}
