@extends('app')

@section('content')
    <h1>{{$bead->name_description}} </h1>

    <img src={{asset($bead->image_file)}}>
    <H3>{{ $bead->name }}</H3>

@stop