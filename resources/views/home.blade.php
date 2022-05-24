@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card text-white bg-dark mb-2" >
        <div class="card-body d-flex justify-content-between">

            <div class="col-md-8">
                <div class="card-body">

                    @foreach($properties as $property)

                    <div class="col-md-4">
                        <img src="{{ $property->image }}" class="img-fluid rounded-start">
                    </div>
                    
                    <h4 class="card-title">{{ $property->name }}</h4>
                    <h6 class="card-title">Ciudad: {{ $property->city }}</h6>
                    <p class="card-text">Valor: ${{ $property->dailyRent }}</p>
                    <p class="card-text">Metros: {{ $property->area }}m2</p>
                    <p class="card-text">Caracteristicas: {{ $property->description }}</p>

                    <div class="text-right">

                        <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-info">
                            <i class="fa-solid fa-pen icons" title="Edit post" ></i>
                        </a>

                    </div>

                    {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}
                        <br>
                        {!! Form::button('<i class="fa-solid fa-trash icons"></i>', [
                            'type' => 'submit',
                            'title' => "Eliminar inmueble",
                            'class' => 'btn btn-danger',
                            'onclick' => "return confirm('¿Estás seguro de eliminar este inmueble?')"
                        ])!!}

                        {!! Form::close() !!}


                    @endforeach

                </div>


            </div>


        </div>
    </div>
</div>


@endsection
