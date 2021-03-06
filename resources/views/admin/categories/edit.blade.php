@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Edit Category
	</div>
	<div class="panel-body">
		<form action="{{route('admin.post_edit_categories',['category'=>$category->id])}}" method="post">
			@csrf
		    <div class="form-group">
		      <label for="name">Category Name:</label>
		      <input type="text" class="form-control" id="name" placeholder="Enter category name" name="name" value="{{ $category->name }}">
		    </div>
		    <div class="form-group">
		    	<label for="">Parent Category</label>
		    	<select name="parent_id" id="" class="form-control">
		    		<option value="">--Select Parent Category---</option>
		    		@foreach($categories as $cat)
		    			<option value="{{$cat->id}}" {{$cat->id==$category->parent_id ? 'selected' : '' }} >{{$cat->name}}</option>
		    		@endforeach
		    	</select>
		    </div>
		    <div class="form-group">
		      <label for="pwd">Status:</label>
		      <select class="form-control" name="status">
		      	<option value="active" {{ $category->status=='active' ? 'selected' : ''}}>Active</option>
		      	<option value="inactive" {{ $category->status=='inactive' ? 'selected' : ''}}>Inactive</option>
		      </select>
		    </div>
		    <button type="submit" class="btn btn-default">Update</button>
		    <button type="reset" class="btn btn-danger">Reset</button>
		</form>		
	</div>
</div>
@endsection