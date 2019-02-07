@extends('layouts.user.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Create new post</div>
	<div class="panel-body">
		<form action="{{route('user.post_create_post')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Title:</label>
				<input type="text" class="form-control" name="title" placeholder="Enter Post Title">
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" class="form-control" name="image">
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-control">
					@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group" style="margin-bottom: 20px">
				<label>Status</label>
				<select class="form-control" name="status">
					<option value="active">Active</option>
					<option value="inactive">Inactive</option>
				</select>
			</div>
			<div class="form-group">
			    <label for="">Description:</label>
			    <textarea name="description" class="form-control summernote"></textarea>
		    </div>
			<input class="btn btn-primary" type="submit" value="Submit">
			<input class="btn btn-danger" type="reset" value="Reset">
		</form>
	</div>
</div>
@endsection