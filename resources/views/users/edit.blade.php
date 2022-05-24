@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($user -> id == Auth::id())
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header text-center text-light" style="background-color: #212529;">
                    <h1>Editar un usuario</h1>
                </div>

                @include('layouts.subview-form-errors')

                <div class="card-body">
                    {!! Form::model($user, ['method' => 'put','route' => ['users.update', $user->id]]) !!}
                        @include('users.subview-user-fields')

                        <div class="d-flex justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        @else
            <h1>Acceso No Autorizado</h1>
        @endif
    </div>
</div>
@endsection
