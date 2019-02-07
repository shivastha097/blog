<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Session;
use App\User;
use Auth;

class UserController extends Controller
{

    public function dashboard() {
        return view('user.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth()->id();
        $user = User::find($id);
        return view('user.profiles.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id=Auth::id();
        $user = User::find($id);
        return view('user.profiles.edit', compact('user'));
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
        ]);

        $user = User::find($id);
        $user->name = $name = $request->name;
        $user->slug = str_slug($name);
        $user->address = $request->address;
        $user->contact_no = $request->contact_no;
        $user->facebook_url = $request->facebook_url;
        $user->twitter_url = $request->twitter_url;
        $user->linkedin_url =  $request->linkedin_url;
        $user->description = $request->description;
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $imageName = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path('uploads/users'), $imageName); 
            $user->avatar = $imageName;
        }
        $user->save();

        Session::flash('msg', 'Profile updated successfully');
        return redirect()->route('user.dashboard');
    }

}
