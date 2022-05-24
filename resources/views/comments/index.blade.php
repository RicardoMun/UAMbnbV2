@extends('layouts.app');

@section('content')
<div class="container">
    <h3>Opiniones realizadas por{{ Auth->User()->name}}</h3>
    @forelse($comentario as $opiniones)
         <a href="{{ route('home'),$opiniones->id_propiedad }}">
        <div class="row">
            <div class="container">
                <div class="card-header">
                    Opiniones
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $opiniones ->contenido}}</p>
                </div>
                @forelse($inmuebles as $inmueble)
                    @if($inmuebles->id ===$opiniones->id_propiedad)
                            <h3>{{ $inmueble->nombre }}</h3>
                    @endif
                    <p>No hay nada</p>
                </a>
                @endforelse

            </div>
        </div>

    @endforelse

</div>
    <div class="container">
        @forelse($likes as $like )
        <a href="{{ route('home'),$like->id_propiedad }}">
                <div class="card-body">
                   @if($like->type=='like')
                         <h6 class="card-title" style="color: rgb(20, 247, 16)">{{ $like->type }}</h6>
                   @else
                         <h6 class="card-title" style="color: rgb(216, 18, 18)">{{ $like->type }}</h6>
                   @endif

                </div>
        </a>
        @empty

        @endforelse
    </div>

@endsection
