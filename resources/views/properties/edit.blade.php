@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Editar inmuebles</h1>

        @include('layouts.subview-form-errors')

        {!! Form::model($property, ['method' => 'put', 'route' => ['properties.update', $property->id]]) !!}

        @include('properties.subview-property-fields')
        <br>
        <button type="submit" class="btn btn-primary">Editar</button>
        <br><br>
        <br><br>

        {!! Form::close() !!}
    </div>



@endsection
