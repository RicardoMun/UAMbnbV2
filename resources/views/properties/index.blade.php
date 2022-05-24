@extends('layouts.app')

@section('content')


<div class="container">

    <h1>Estos son todos los inmuebles disponibles: </h1>

    @forelse($properties as $property)

    @include('properties.subview-property')

    @empty
        <div class="alert alert-info" role="alert">
            No se han agregado inmuebles
        </div>
    @endforelse

</div>


@endsection
