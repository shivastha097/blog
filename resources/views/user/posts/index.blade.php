@extends('layouts.user.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">My Posts</div>
	<div class="panel-body">
		<div class="pull-right" style="margin-bottom: 20px">
			<a href="" class="btn btn-primary">Add New Post</a>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>SN</th>
					<th>Title</th>
					<th>Image</th>
					<th>Category</th>
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
							<td>{{$post->image}}</td>
							<td>{{$post->category->name}}</td>
							<td>{{$post->created_at}}</td>
							<td>
								<a href="#" class="btn btn-primary">View</a>
								<a href="" class="btn btn-primary">Edit</a>
								<a href="#" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endforeach
				@else
				<tr>
					<td class="text-center" colspan="6">No posts available</td>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection