@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	@if($errors->count()>0)
	@foreach($errors->all() as $error)
	{{$error}}

	@endforeach

	@endif
	<div class="panel-heading">New Post
		<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
	<div class="panel-body">
		<form action="{{route('admin.post_create_posts')}}" method="post" enctype="multipart/form-data">
			@csrf
		    <div class="form-group">
		      <label for="name">Title:</label>
		      <input type="text" class="form-control" id="name" placeholder="Enter post name" name="title">
		    </div>
		    <div class="form-group">
		      	<label for="category">Category:</label>
		      	<select class="form-control" name="category_id">
		      		<option>---Select the Category---</option>
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
		      		<option>---Select the Status---</option>
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