@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Editar inmuebles</h1>

        @include('layouts.subview-form-errors')

        {!! Form::model($property, ['method' => 'put', 'route' => ['properties.update', $property->id]]) !!}

        @include('properties.subview-property-fields')

        <button type="submit" class="btn btn-primary">Editar</button>


        {!! Form::close() !!}
    </div>



@endsection
