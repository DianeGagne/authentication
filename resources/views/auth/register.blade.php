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
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', ' Confirm Password:') !!}
        {!! Form::text('password_confirmation', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Sign up!', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    <a href="{{ URL::route('login') }}" class="btn btn-info btn-block">Login</a>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@stop