@extends('app')



@section('content')
	<h1>Sign up - new user</h1>

	{!! Form::open() !!}

		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('pass', 'Password:') !!}
			{!! Form::text('pass', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Sign up!', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}


@stop