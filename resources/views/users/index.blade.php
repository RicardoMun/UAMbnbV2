@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header text-center text-light" style="background-color: #212529;">
                    <h1>{{ $title }}</h1>
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @forelse($users as $user)
                            <a href="{{ url('/users/'.$user->id) }}">
                                <li class="list-group-item">
                                    <i class="fa-solid fa-circle-user"></i>   {{ $user->name }}
                                </li>
                            </a>
                            {{-- <a href="{{ url('/users/'.$user->id) }}">Ver detalles</a> --}}
                        @empty
                            <li class="list-group-item">No hay usuarios registrados.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
