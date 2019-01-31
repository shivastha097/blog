@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">

	@include('layouts.admin.snippets.error-message')
	<div class="panel-heading">Edit Profile
	</div>
	<div class="panel-body">
		<form action="{{route('user.post_edit_profile',['user'=>$user->id])}}" method="post" enctype="multipart/form-data">
			@csrf
		    <div class="form-group">
		      	<label>Name:</label>
		      	<input type="text" class="form-control" name="name" value="{{$user->name}}">
		    </div>
		    <div class="form-gruop">
		    	<label>Select image file</label>
		    	<input class="form-control" type="file" name="avatar" value="{{$user->avatar}}">
		    </div>
			<div class="form-group">
			  	<label>Address:</label>
			  	<input type="text" class="form-control" name="address" value="{{$user->address}}">
			</div>
			<div class="form-group">
			  	<label>Contact No:</label>
			  	<input type="text" class="form-control" name="contact_no" value="{{$user->contact_no}}">
			</div>
			<div class="form-group">
			  	<label>Email:</label>
			  	<input type="text" class="form-control" name="email" value="{{$user->email}}" readonly>
			</div>
			<div class="form-group">
			  	<label>Facebok Url:</label>
			  	<input type="text" class="form-control" name="facebook_url" value="{{$user->facebook_url}}">
			</div>
			<div class="form-group">
			  	<label>Twitter Url:</label>
			  	<input type="text" class="form-control" name="twitter_url" value="{{$user->twitter_url}}">
			</div>
			<div class="form-group">
			  	<label>LinkedIn Url:</label>
			  	<input type="text" class="form-control" name="linkedin_url" value="{{$user->linkedin_url}}">
			</div>
		    <div class="form-group">
		      <label for="description">Description:</label>
		      <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$user->description}}</textarea>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		    <button type="reset" class="btn btn-danger">Reset</button>
		</form>		
	</div>
</div>
@endsection