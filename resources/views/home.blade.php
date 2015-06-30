@extends('app')

@section('content')
<h1> Welcome to my sign in page</h1>

    <a href="{{ URL::route('login') }}" class="btn btn-info btn-block">Login</a>
    <a href="{{ URL::route('register') }}" class="btn btn-info btn-block">Register</a>
@stop