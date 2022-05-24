@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-dark">
                    <div class="card-header text-center text-light" style="background-color: #212529;">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div class="card mb-2 ">
                                    {!! Form::open(['route' => 'bills.index', 'method' => 'GET']) !!}
                                    <div class="card-body">
                                        <label for="status" class="form-label"><b>Filtrar por Estado de Pago</b></label>
                                        <hr>
                                        {!! Form::radio('status', 'Pago', false) !!}
                                        <label for="status" class="form-label">Pago</label>
                                        <br>
                                        {!! Form::radio('status', 'Pendiente', false) !!}
                                        <label for="status" class="form-label">Pendiente</label>

                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <button type="submit" class="btn btn-primary">Ordenar</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @forelse($bills as $bill)
                                @include('bills.subview-bill')
                            @empty
                                <li class="list-group-item">No hay facturas registradas.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
