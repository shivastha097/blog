@extends('layouts.admin.index')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">My Account
		</div>
		<div class="panel-body">
			<div class="pull-right">
				<a class="btn btn-primary" href="{{route('user.get_create_user')}}">Create New User</a>
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
			        <th>Email Address</th>
			        <th>Address</th>
			        <th>Contact no.</th>
			        <th>Created At</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			   		@if($users->count())
			   			@foreach($users as $key=>$user)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$user->name}} <span class="badge">{{$user->posts->count()}}</span></td>
								<td>
									<img src="{{ asset("uploads/users/$user->avatar") }}" alt="" height="100" width="100">
								</td>
								<td>{{$user->email}}</td>
								<td>{{$user->address}}</td>
								<td>{{ $user->contact_no }}</td>
								<td>{{$user->created_at->toFormattedDateString()}}</td>
								<td>
									<a href="{{route('user.show_user', ['user'=>$user->id])}}" class="btn btn-primary">View</a>
									<a href="{{route('user.get_edit_user', ['user'=>$user->id])}}" class="btn btn-primary">Edit</a>
									<a href="{{route('user.delete_user', ['user'=>$user->id])}}" class="btn btn-danger">Delete</a>
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