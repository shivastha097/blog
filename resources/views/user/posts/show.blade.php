@extends('layouts.user.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<div>
			<h3>Show Post</h3>
		</div>
	</div>
	<div class="panel-body">
		<div class="col-12">
			<h2>{{$post->title}}</h2>
			<p>Category: <span>{{$post->category->name}}</span> | Status: <span>{{$post->status}}</span></p>
			<hr>
			<img src="{{asset('uploads/'.$post->image)}}" alt="Post image" height="300" width="50%">
			<div style="margin: 20px 0">
				{{$post->description}}
			</div>

			<a href="" class="btn btn-primary">Back</a>
			<a href="{{route('user.get_edit_post', ['post'=>$post->id])}}" class="btn btn-warning">Edit</a>
		</div>
	</div>
</div>
@endsection