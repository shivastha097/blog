@extends('layouts.admin.index')
@section('content')
<div class="panel panel-default">
    <div class="panel-body">

      	<h1 class="mt-4">Title : {{$post->title}}</h1>

      	<p class="lead">by <a href="#">{{$post->user->name}}</a></p>

      	<hr>
      	<p>Posted on <span>{{$post->created_at->toFormattedDateString()}}</span> | Category: <span><a href="#">{{$post->category->name}}</a></span></p>
      	<hr>
      	<img class="img-fluid rounded" src="{{ asset("uploads/$post->image") }}" alt="">
      	<hr>

      	<div>{{$post->description}}</div>
    </div>
 </div>
 @endsection