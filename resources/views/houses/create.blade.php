@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col s6">
            <h1>Agregar inmueble</h1>
        </div>
    </div>

    @include('layouts.subview-form-errors')

    {!! Form::open(['route' => 'houses.store', 'method' => 'post']) !!}

    @include('houses.subview-fields-houses')

    <button onclick="publicar()" type="submit" class="btn btn-primary">Crear inmueble</button>

    {!! Form::close() !!}


    {{-- <div class="alert alert-secondary" role="alert">
        El inmueble ha sido editado con exito!
    </div> --}}

</div>


@endsection
