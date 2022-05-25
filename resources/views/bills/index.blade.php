@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-dark">
                    
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
