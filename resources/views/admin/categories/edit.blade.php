@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Edit Category
		<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
	<div class="panel-body">
		<form action="{{route('admin.patch_edit_categories')}}" method="post">
			@csrf
			@method('PATCH')
		    <div class="form-group">
		      <label for="name">Category Name:</label>
		      <input type="text" class="form-control" id="name" placeholder="Enter category name" name="name" value="{{ $categories->name }}">
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