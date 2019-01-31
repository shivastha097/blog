@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">View Profile</div>
	<div class="panel-body">
        <div class="row">
        	<div class="col-md-12">
        		<div class="pull-right" style="margin-bottom: 20px">
        		    <a class="btn btn-primary" href="{{route('user.get_edit_profile', ['user'=>$user->id])}}">Edit Profile</a>
        		</div>
        	</div>
            <div class="col-md-3">
                <div class="profile-img">
                    <img src="{{asset("uploads/users/$user->avatar")}}" alt="Profile image" height="200" width="100%" />
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-head">
                    <table class="table">
                    	<tr>
                    		<th>Name</th>
                    		<td>{{$user->name}}</td>
                    	</tr>
                    	<tr>
                    		<th>Email</th>
                    		<td>{{$user->email}}</td>
                    	</tr>
                    	<tr>
                    		<th>Address</th>
                    		<td>{{$user->address}}</td>
                    	</tr>
                    	<tr>
                    		<th>Contact Number</th>
                    		<td>{{$user->contact_no}}</td>
                    	</tr>
                    	<tr>
                    		<th>Facebook Url</th>
                    		<td>{{$user->facebook_url}}</td>
                    	</tr>
                    	<tr>
                    		<th>Twitter Url</th>
                    		<td>{{$user->twitter_url}}</td>
                    	</tr>
                    	<tr>
                    		<th>LinkedIn Url</th>
                    		<td>{{$user->linkedin_url}}</td>
                    	</tr>
                    	<tr>
                    		<th>About</th>
                    		<td>{{$user->description}}</td>
                    	</tr>
                    </table>
                </div>
            </div> 
        </div>  
	</div>
</div>

@endsection








