@extends('app')

@section('content')
    <h1>Beads </h1>

    @foreach( $beads as $bead)

    <div class="col-md-2">
        <name>
            <H3><a href = {{'/beads/'.$bead->id}}> {{ $bead->name_description }}</a></H3>
        </name>

        <H4>{{ $bead->name }}</H4>
        <img src={{asset($bead->image_file)}}>
    </div>
    @endforeach
@stop