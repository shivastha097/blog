@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">

	@include('layouts.admin.snippets.error-message')
	<div class="panel-heading">New Post
	</div>
	<div class="panel-body">
		<form action="{{route('admin.post_create_post')}}" method="post" enctype="multipart/form-data">
			@csrf
		    <div class="form-group">
		      <label for="name">Title:</label>
		      <input type="text" class="form-control" id="name" placeholder="Enter post title" name="title">
		    </div>
		    <div class="form-group">
		      	<label for="category">Category:</label>
		      	<select class="form-control" name="category_id">
		      		<option value="">---Select the Category---</option>
		      		@foreach($categories as $category)
		      			<option value="{{$category->id}}">{{$category->name}}</option>
		      		@endforeach
		      	</select>
		    </div>
		    <div class="form-gruop">
		    	<label>Select image file</label>
		    	<input class="form-control" type="file" name="image">
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
		      	</select>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		    <button type="reset" class="btn btn-danger">Reset</button>
		</form>		
	</div>
</div>
@endsection