@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col s6">
            <h1>Agregar inmueble</h1>
        </div>
    </div>

    @include('layouts.subview-form-errors')

    {!! Form::open(['route' => 'properties.store', 'method' => 'post']) !!}

    @include('properties.subview-property-fields')
    <br><br>

        <button type="submit" class="btn btn-primary">Crear inmueble</button>

    <br><br>
    <br><br>

    {!! Form::close() !!}

</div>


@endsection
