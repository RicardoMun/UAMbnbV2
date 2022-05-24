@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card mb-3">
                    <div class="card-header text-center text-light" style="background-color: #212529;">
                        <h1><i class="fa-regular fa-address-card"></i> Factura #{{ $bill->user_id }}</h1>
                    </div>
                </div>
                @include('layouts.subview-form-errors')
                <div class="d-flex justify-content-center">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="" style=''>
                                    <a href="{{ url('/bills/'.$bill->id) }}" class="link-dark">
                                        <h5 class="card-title">
                                            <i class="fa-solid fa-clipboard"></i>
                                            <b>Información de la Factura</b>
                                        </h5>
                                    </a>
                                    <h6><b>Fecha Inicial: </b>{{ $bill->start_date }}</h6>
                                    <h6><b>Fecha Final: </b>{{ $bill->final_date }}</h6>
                                    <h6><b>Precio Total: </b>{{ $bill->total_price }}</h6>
                                    <h6><b>Estado: </b>{{ $bill->status }}</h6>
                                </div>
                                @auth
                                <div class="d-flex justify-content-between">
                                    @if (Auth::user()->role === "Admin" || Auth::id() === $bill->user_id)
                                        <div class="" style=''>
                                            <a href="{{ route('bills.edit', $bill->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa-solid fa-pen-to-square" title="Editar Inmueble"></i>
                                            </a>
                                        </div>
                                        &nbsp;
                                        <div>
                                            {!! Form::open(['route' => ['bills.destroy', $bill->id], 'method' => 'delete']) !!}
                                                {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                                                    'type' => 'submit',
                                                    'title' => "Remover Inmueble",
                                                    'class' => 'btn btn-danger btn-sm',
                                                    'onclick' => 'return confirm("¿Está seguro de remover este inmueble?\n\nTenga en cuenta que esta acción no se puede deshacer.")'
                                                ]) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    @endif
                                    {{-- <a href="http://www.google.com" onclick="return confirm('¿Está seguro?');">Google</a> --}}
                                </div>
                                @endauth
                            </div>
                            <div class="row mt-4">
                                <div class="col s6" >
                                    <h6 class="card-subtitle my-2 text-muted"> {{ $bill->created_at }}</h6>
                                </div>
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
