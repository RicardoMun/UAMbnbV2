@extends('layouts.app')

@section('content')


<div class="container">

    <h1>Estos son todos tus Inmuebles: </h1>

@forelse($houses as $house)

    @include('houses.subview-house')

    @empty
        <div class="alert alert-info" role="alert">
            El usuario no ha agregado Inmuebles
        </div>
    @endforelse

</div>


@endsection
