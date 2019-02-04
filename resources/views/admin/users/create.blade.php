@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	@include('layouts.admin.snippets.error-message')
	<div class="panel-heading">New User
	</div>
	<div class="panel-body">
		<form action="{{route('admin.post_create_user')}}" method="post" enctype="multipart/form-data">
			@csrf
		    <div class="form-group">
		      	<label>Name:</label>
		      	<input type="text" class="form-control" name="name">
		    </div>
		    <div class="form-gruop">
		    	<label>Select image file</label>
		    	<input class="form-control" type="file" name="avatar">
		    </div>
			<div class="form-group">
			  	<label>Address:</label>
			  	<input type="text" class="form-control" name="address">
			</div>
			<div class="form-group">
			  	<label>Contact No:</label>
			  	<input type="text" class="form-control" name="contact_no">
			</div>
			<div class="form-group">
			  	<label>Email:</label>
			  	<input type="email" class="form-control" name="email">
			</div>
			<div class="form-group">
			  	<label>Password:</label>
			  	<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group">
			  	<label>Confirm Password:</label>
			  	<input type="password" class="form-control" name="password_confirmation">
			</div>
			<div class="form-group">
				<label for="">User Type:</label>
				<select name="isAdmin" id="" class="form-control">
					<option value="">---Select User Type---</option>
					<option value="1">Admin</option>
					<option value="0">User</option>
				</select>
			</div>
			<div class="form-group">
			  	<label>Facebok Url:</label>
			  	<input type="text" class="form-control" name="facebook_url">
			</div>
			<div class="form-group">
			  	<label>Twitter Url:</label>
			  	<input type="text" class="form-control" name="twitter_url">
			</div>
			<div class="form-group">
			  	<label>LinkedIn Url:</label>
			  	<input type="text" class="form-control" name="linkedin_url">
			</div>
		    <div class="form-group">
		      <label for="description">Description:</label>
		      <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
		    </div>
		    <div class="form-group">
		      	<label for="pwd">Status:</label>
		      	<select class="form-control" name="status">
		      		<option value="">---Select the Status---</option>
		      		<option value="active">Active</option>
		      		<option value="inactive">Inactive</option>
		      		<option value="pending">Pending</option>
		      	</select>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		    <button type="reset" class="btn btn-danger">Reset</button>
		</form>		
	</div>
</div>
@endsection