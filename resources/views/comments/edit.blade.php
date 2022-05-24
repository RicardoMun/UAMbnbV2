@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header text-center text-light" style="background-color: #212529;">
                    <h1>Editar un comentario</h1>
                </div>

                @include('layouts.subview-form-errors')

                <div class="card-body">
                    {!! Form::model($comment, ['method' => 'put','route' => ['comments.update', $comment->id]]) !!}
                        @include('comments.subview-comment-fields')

                        <button type="submit" class="btn btn-primary">Editar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
