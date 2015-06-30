@extends('app')

@section('content')
	<h1>Logged in! </h1>

    Hello {{ Auth::user()->name }}

    <a href="{{ URL::route('logout') }}" class="btn btn-info btn-block">Logout</a>
@stop