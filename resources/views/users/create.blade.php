@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">

                @include('layouts.subview-form-errors')

                <div class="card-body">
                    {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
                        @include('users.subview-user-fields')

                        <div class="d-flex justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary float-right">Crear</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


