@extends('app')

@section('content')
    <h1>Beads </h1>


    @foreach( $beads as $bead)
    <name>
        <H2><a href = {{'beads/'.$bead->id}}> {{ $bead->name_description }}</a></H2>
    </name>

    <H3>{{ $bead->name }}</H3>
    <img src={{asset($bead->image_file)}}>

    @endforeach
@stop