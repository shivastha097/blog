@extends('layouts.admin.index')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Posts
		</div>
		<div class="panel-body">
			<div class="pull-right">
				<a class="btn btn-primary" href="{{route('admin.get_create_post')}}">Create New Post</a>
			</div>
			<br>
			<br>
			@include('layouts.admin.snippets.session-message')
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>S.N.</th>
			        <th>Name</th>
			        <th>Image</th>
			        <th>Category</th>
			        <th>Status</th>
			        <th>Created At</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			   		@if($posts->count())
			   			@foreach($posts as $key=>$post)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$post->title}}</td>
								<td>
									<img src="{{ asset("uploads/$post->image") }}" alt="" height="100" width="100">
								</td>
								<td>{{$post->category->name}}</td>
								<td>{{ $post->status }}</td>
								<td>{{$post->created_at->toFormattedDateString()}}</td>
								<td>
									<a href="{{route('admin.view_post',['post'=>$post->id])}}" class="btn btn-primary">View</a>
									<a href="{{route('admin.get_edit_post', ['post'=>$post->id])}}" class="btn btn-primary">Edit</a>
									<a href="{{route('admin.delete_post',['post'=>$post->id])}}" class="btn btn-danger">Delete</a>
								</td>
							</tr>
			   			@endforeach
			   		@else
			   			<tr>
			   				<td colspan="6">No posts available.</td>
			   			</tr>
			   		@endif
			    </tbody>
			  </table>
			 
		</div>
	</div>
@endsection