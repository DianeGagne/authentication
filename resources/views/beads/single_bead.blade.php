@extends('app')

@section('content')



    <h1>{{$bead->name_description}} </h1>

    <img src={{asset($bead->image_file)}}>
    <H3>{{ $bead->name }}</H3>

    @foreach($bead->finishes as $finish)
        {{$finish->name}}
    @endforeach


    @if(Auth::check())
        <div class="form-group">
            {!! Form::submit('Add to favorites', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        <!--a href="{{ URL::route('login') }}" class="btn btn-info btn-block">Add to {{Auth::user()->name}}'s favorites</a-->
    @else
        <a href="{{ URL::route('login') }}" class="btn btn-info btn-block">Login</a>
    @endif

@stop