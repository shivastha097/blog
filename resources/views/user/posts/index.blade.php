@extends('layouts.user.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">My Posts</div>
	<div class="panel-body">
		<div class="pull-right" style="margin-bottom: 20px">
			<a href="{{route('user.get_create_post')}}" class="btn btn-primary">Add New Post</a>
		</div>
		<div class="clear"></div>
		@include('layouts.admin.snippets.session-message')
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>SN</th>
					<th>Title</th>
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
							<td><img src="{{asset('uploads/'.$post->image)}}" alt="" height="80" width="80"></td>
							<td>{{$post->category->name}}</td>
							<td>{{$post->status}}</td>
							<td>{{$post->created_at}}</td>
							<td>
								<a href="{{route('user.view_post', ['post'=>$post->id])}}" class="btn btn-primary">View</a>
								<a href="{{route('user.get_edit_post', ['post'=>$post->id])}}" class="btn btn-primary">Edit</a>
								<a href="#" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endforeach
				@else
				<tr>
					<td class="text-center" colspan="7">No posts available</td>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection