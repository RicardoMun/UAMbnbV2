<div class="card mb-2">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="" style=''>
                <a href="{{ url('/bills' . $bill->id) }}" class="link-dark">
                    <h5 class="card-title">
                        <i class="fa-solid fa-clipboard"></i>
                        <b>Información de la Factura</b>
                    </h5>
                </a>
                @foreach ($reports as $report)
                    @foreach ($properties as $property)
                        @if ($report->id == $bill->report_id && $report->property_id == $property->id)
                            <h6><b>Nombre Propiedad: </b>{{ $property->name }}</h6>
                        @endif
                    @endforeach
                @endforeach
                <h6><b>Fecha Inicial: </b>{{ $bill->start_date }}</h6>
                <h6><b>Fecha Final: </b>{{ $bill->final_date }}</h6>
                <h6><b>Precio Total: </b>{{ $bill->total_price }}</h6>
                <h6><b>Estado: </b>{{ $bill->status }}</h6>
            </div>
            @auth
                <div class="d-flex justify-content-between">
                    @if (Auth::user()->role === 'Admin' || Auth::id() === $bill->user_id)
                        @if ($bill->status == 'Pendiente')
                            <div class="" style=''>
                                <a href="{{ route('bills.edit', $bill->id) }}" class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-hand-holding-dollar" title="Pagar"></i>
                                </a>
                            </div>
                            &nbsp;
                        {{-- @else
                            @if ($bill->status == 'Pago')
                                <div>
                                    {!! Form::open(['route' => ['bills.destroy', $bill->id], 'method' => 'delete']) !!}
                                    {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                                        'type' => 'submit',
                                        'title' => 'Remover Factura',
                                        'class' => 'btn btn-danger btn-sm',
                                        'onclick' => 'return confirm("¿Está seguro de remover esta factura?\n\nTenga en cuenta que esta acción no se puede deshacer.")',
                                    ]) !!}
                                    {!! Form::close() !!}
                                </div>
                            @endif --}}
                        @endif
                    @endif
                    {{-- <a href="http://www.google.com" onclick="return confirm('¿Está seguro?');">Google</a> --}}
                </div>
            @endauth
        </div>
        <div class="row mt-4">
            <div class="col s6">
                <h6 class="card-subtitle my-2 text-muted"> {{ $bill->created_at }}</h6>
            </div>
            {{-- <div class="col s6" style='text-align:right'>
                <h6 class="card-subtitle my-2 text-muted">{{ $bill->category_id }} </h6>
            </div> --}}
        </div>
    </div>
</div>