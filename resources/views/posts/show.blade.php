@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Go Back</a>
<h1>{{$post->title}}</h1>
 <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
<div class="float-right">
{!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST'])!!}
 {{Form::hidden('_method','DELETE')}}
  {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
</div>
    @endif
@endif

{{-- <div class="row">
    <div class="col">a</div>
    <div class="col">b</div>
    <div class="col">c</div>
</div> --}}

@endsection