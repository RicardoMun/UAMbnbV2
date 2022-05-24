@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @forelse($users as $user)
                            <a href="{{ url('/users/'.$user->id) }}">
                                <li class="list-group-item">
                                    <i class="fa-solid fa-circle-user"></i>   {{ $user->name }}
                                </li>
                            </a>
                        @empty
                            <li class="list-group-item">No hay usuarios registrados.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
            <br>
            <div class="btn btn-secondary"><a href="/users/create">Crear usuario</a></div>
        </div>

    </div>
</div>
@endsection
