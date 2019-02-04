@extends('layouts.user.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<div>
			Edit Post
		</div>
	</div>
	<div class="panel-body">
		@include('layouts.admin.snippets.error-message')
		<form action="{{route('user.post_edit_post', ['post'=>$post->id])}}" enctype="multipart/form-data" method="POST">
			@csrf
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" name="title" value="{{$post->title}}">
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-control">
					<option value="">---Select Category---</option>
					@foreach($categories as $category)
						<option value="{{$category->id}}" {{$post->category_id==$category->id ? 'selected' : ''}}>{{$category->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" class="form-control" name="image" value="{{$post->image}}">
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control">
					<option value="active" {{$post->status=='active' ? 'selected' : ''}}>Active</option>
					<option value="inactive" {{$post->status=='inactive' ? 'selected' : ''}}>Inactive</option>
				</select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="description" class="form-control" cols="30" rows="10">{{$post->description}}</textarea>
			</div>
			<input type="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
</div>
@endsection