@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">

	@include('layouts.admin.snippets.error-message')
	<div class="panel-heading">Edit Profile
	</div>
	<div class="panel-body">
		<form action="{{route('admin.post_edit_user',['user'=>$user->id])}}" method="post" enctype="multipart/form-data">
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
		    	<label for="">User Type:</label>
		    	<select name="isAdmin" id="" class="form-control">
		    		<option value="">---Select User Type---</option>
		    		<option value="1" {{$user->isAdmin==1 ? 'selected' : '' }}>Admin</option>
		    		<option value="0" {{$user->isAdmin==0 ? 'selected' : '' }}>User</option>
		    	</select>
		    </div>
			<div class="form-group">
			  	<label>Email:</label>
			  	<input type="text" class="form-control" name="email" value="{{$user->email}}">
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
			  	<label>Facebok Url:</label>
			  	<input type="text" class="form-control" name="facebook_url" value="{{$user->facebook_url}}">
			</div>
			<div class="form-group">
			  	<label>Twitter Url:</label>
			  	<input type="text" class="form-control" name="twitter_url" value="{{$user->twitter_url}}">
			</div>
			<div class="form-group" style="margin-bottom: 20px">
			  	<label>LinkedIn Url:</label>
			  	<input type="text" class="form-control" name="linkedin_url" value="{{$user->linkedin_url}}">
			</div>
		    <div class="form-group">
			    <label for="">Description:</label>
			    <textarea name="description" class="form-control summernote">{!! $user->description !!}</textarea>
		    </div>
		    <div class="form-group">
		      	<label for="pwd">Status:</label>
		      	<select class="form-control" name="status">
		      		<option value="">---Select the Status---</option>
		      		<option value="active" {{$user->status=='active'?'selected':''}}>Active</option>
		      		<option value="inactive" {{$user->status=='inactive'?'selected':''}}>Inactive</option>
		      		<option value="pending" {{$user->status=='pending'?'selected':''}}>Pending</option>
		      	</select>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		    <button type="reset" class="btn btn-danger">Reset</button>
		</form>		
	</div>
</div>
@endsection