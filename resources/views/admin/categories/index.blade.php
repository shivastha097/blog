@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Categories
		<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
	<div class="panel-body">
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>S.N.</th>
		        <th>Name</th>
		        <th>Status</th>
		        <th>Created At</th>
		      </tr>
		    </thead>
		    <tbody>
		    @foreach($categories as $key=>$category)
		      <tr>
		        <td>{{$key+1}}</td>
		        <td>{{$category->name}}</td>
		        <td>{{$category->status}}</td>
		        <td>{{$category->created_at->diffForHumans()}}</td>
		      </tr>
		    @endforeach
		    </tbody>
		  </table>
	</div>
</div>
@endsection


































































