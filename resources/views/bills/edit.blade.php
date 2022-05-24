@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header text-center text-light" style="background-color: #212529;">
                    <h1>Pagar Factura</h1>
                </div>

                @include('layouts.subview-form-errors')

                <div class="card-body">
                    {!! Form::model($bill, ['method' => 'put','route' => ['bills.update', $bill->id]]) !!}
                        @include('bills.subview-bill-fields')

                        <div class="d-flex justify-content-center">
                            <div class="" style=''>
                                <button type="submit" class="btn btn-primary btn-sm" title="Pagar">Pagar</button>
                            </div>
                            &nbsp;
                            <div class="" style=''>
                                <a href="{{ url('/bills') }}" class="btn btn-primary btn-sm" title="Cancelar">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
