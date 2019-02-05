@extends('layouts.admin.index')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">My Account
		</div>
		<div class="panel-body">
			<div class="pull-right">
				<a class="btn btn-primary" href="{{route('admin.get_create_user')}}">Create New User</a>
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
			        <th>User Type</th>
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
								<td>{{$user->isAdmin==1 ? 'Admin' : 'User' }}</td>
								<td>{{$user->created_at->toFormattedDateString()}}</td>
								<td>
									<a href="{{route('admin.show_user', ['user'=>$user->id])}}" class="btn btn-primary">View</a>
									<a href="{{route('admin.get_edit_user', ['user'=>$user->id])}}" class="btn btn-primary">Edit</a>
									<a href="{{route('admin.delete_user', ['user'=>$user->id])}}" class="btn btn-danger">Delete</a>
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