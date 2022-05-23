@extends('layouts.app')

@section('content')


<div class="container">

    <h1>Estos son todos tus inmuebles: </h1>

@forelse($properties as $property)

    @include('properties.subview-property')

    @empty
        <div class="alert alert-info" role="alert">
            El usuario no ha agregado inmuebles
        </div>
    @endforelse

</div>


@endsection
