@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center"><strong>{{ __('Estos son los inmuebles que tienes ofertados') }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <a href="">
                            <div class="col">
                                <div class=" justify-content-around">
                                    @foreach($properties as $property)
                                        <div class="card mb-3 justify-content-around">
                                            <img src="{{ $property->images }}" class="card-img-top img-fluid" width="120px">
                                            <div class="card-body">
                                            <h5 class="card-title">{{ $property->name }}</h5>
                                            <p class="card-text">{{ $property->description }}</p>
                                            <p class="card-text"><small class="text-muted">{{ $property->created_at->diffForHumans() }}</small></p>
                                            <button type="button" class="btn btn-primary">Reservar

                                            </button>
                                            </div>
                                        </div>
                                            <div class="text-left">

                                            <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-info">
                                                <i class="fa-solid fa-pen icons" title="Edit post" ></i>
                                            </a>

                                            {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}
                                            <br>
                                            {!! Form::button('<i class="fa-solid fa-trash icons"></i>', [
                                                'type' => 'submit',
                                                'title' => "Eliminar inmueble",
                                                'class' => 'btn btn-danger',
                                                'onclick' => "return confirm('¿Estás seguro de eliminar este inmueble?')"
                                            ])!!}

                                            {!! Form::close() !!}
                                             </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
