@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                    <h1>Crear un comentario nuevo </h1>
                @include('layouts.subview-form-errors')
                <div class="card-body">
                    {!! Form::open(['route' => 'opiniones     .store', 'method' => 'post']) !!}

                        @include('comments.subview-comment-fields')
                        <button type="submit" class="btn btn-primary float-right">Crear</button>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

