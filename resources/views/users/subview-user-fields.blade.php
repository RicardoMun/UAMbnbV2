@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card mb-3">
                    <div class="card-header text-center text-light" style="background-color: #212529;">
                        <h1><i class="fa-regular fa-address-card"></i> Usuario #{{ $user->id }}</h1>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-body">
                                <h5><b>Nombre del Usuario:</b> {{ $user->name }}</h5>
                                <h5><b>Apellido del Usuario:</b> {{ $user->last_name }}</h5>
                                <h5><b>Correo Electrónico:</b> {{ $user->email }}</h5>
                                <h5><b>Rol:</b> {{ $user->role }}</h5>
                            </div>
                            <div class="d-flex justify-content-between">
                                @if (Auth::id() === $user->id || Auth::user()->role === "Admin")
                                    <div class="" style=''>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa-solid fa-pen-to-square" title="Editar User"></i>
                                        </a>
                                    </div>
                                    {{-- <a href="http://www.google.com" onclick="return confirm('¿Está seguro?');">Google</a> --}}
                                    &nbsp;
                                    <div>
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                                            {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                                                'type' => 'submit',
                                                'title' => "Remover user",
                                                'class' => 'btn btn-danger btn-sm',
                                                'onclick' => 'return confirm("¿Está seguro de remover este user?\n\nTenga en cuenta que esta acción no se puede deshacer.")'
                                            ]) !!}
                                        {!! Form::close() !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="card-body text-center">
                        <a href="{{ url()->previous() }}" class="link-dark"><i class="fa-solid fa-arrow-left-long"> Volver</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
