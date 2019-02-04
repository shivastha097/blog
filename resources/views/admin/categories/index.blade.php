@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Categories
	</div>
	<div class="panel-body">
		<div class="pull-right">
			<a class="btn btn-primary" href="categories/create">Create New Category</a>
		</div>
		<br>
		<br>
		@include('layouts.admin.snippets.session-message')
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>S.N.</th>
		        <th>Name</th>
		        <th>Status</th>
		        <th>Created At</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		    @if($categories->count())
		    	@foreach($categories as $key=>$category)
		    	  <tr>
		    	    <td>{{$key+1}}</td>
		    	    <td>{{$category->name}} <span class="badge badge-info">{{$category->posts->count()}}</span></td>
		    	    <td>{{$category->status}}</td>
		    	    <!-- <td>{{$category->created_at->diffForHumans()}}</td> -->
		    	    <td>{{$category->created_at->toFormattedDateString()}}</td>
		    	    <td>
		    	    	<a class="btn btn-primary" href="{{ route('admin.get_edit_category',['category'=> $category->id]) }}">Edit</a>
		    	    	<a class="btn btn-danger" href="{{ route('admin.get_delete_category', ['category'=>$category->id]) }}">Delete</a>
		    	    </td>
		    	  </tr>
		    	@endforeach
		    @else
		    	<tr class="text-center">
		    		<td colspan="5">No Categories Available</td>
		    	</tr>
		    @endif
		    </tbody>
		  </table>
		  {{$categories->links()}}
	</div>
</div>
@endsection


































































