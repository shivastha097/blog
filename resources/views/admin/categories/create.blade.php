@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">New Category
	</div>
	<div class="panel-body">
		<form action="{{route('admin.post_create_categories')}}" method="post">
			@csrf
		    <div class="form-group">
		      <label for="name">Category Title:</label>
		      <input type="text" class="form-control" id="name" placeholder="Enter category name" name="name">
		    </div>
		    <div class="form-group">
		    	<label for="">Parent Category</label>
		    	<select name="parent_id" id="" class="form-control">
		    		<option value="">--Select Parent Category---</option>
		    		@foreach($categories as $category)
		    			<option value="{{$category->id}}">{{$category->name}}</option>
		    		@endforeach
		    	</select>
		    </div>
		    <div class="form-group">
		      <label for="pwd">Status:</label>
		      <select class="form-control" name="status">
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