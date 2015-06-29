@extends('app')

@section('content')
	<h1>Sign in - existing user</h1>


    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('remember', 'Remember me:') !!}
        {!! Form::checkbox('remember', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Sign up!', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

@stop