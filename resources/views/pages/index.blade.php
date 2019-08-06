@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
     <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a></p>
        <h1>{{$title}}</h1>
        <p>This is Laravel application from "GmickApp" bcx series</p>
</div>
@endsection