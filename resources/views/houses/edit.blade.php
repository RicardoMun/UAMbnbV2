{{-- @extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Editar inmuebles</h1>

        @include('layouts.subview-form-errors')

        {!! Form::model($house, ['method' => 'put', 'route' => ['houses.update', $house->id]]) !!}

        @include('houses.subview-fields-houses')

        <button type="submit" class="btn btn-primary">Editar</button>

        {{-- <div class="alert alert-secondary" role="alert">
            El inmueble ha sido editado con exito!
        </div> --}}

        {!! Form::close() !!}
    </div>



@endsection
 --}}
