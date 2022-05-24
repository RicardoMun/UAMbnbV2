<div class="card mb-2">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="" style=''>
                <a href="{{ url('/bills'.$bill->id) }}" class="link-dark">
                    <h5 class="card-title">
                        <i class="fa-solid fa-clipboard"></i>
                        <b>Tu factura</b>
                    </h5>
                </a>
                    @foreach ($properties as $property)
                        <h6>Nombre del inmueble {{ $property->name }}</h6>
                    @endforeach
                <h6><b>Fecha de inicio </b>{{ $bill->startDate }}</h6>
                <h6><b>Fecha de pago </b>{{ $bill->finishDate }}</h6>
                <h6><b>Total a pagar </b>{{ $bill->total }}</h6>
            </div>
            @auth
                <div class="d-flex justify-content-between">
                    @if (Auth::user()->role == 'Admin' || Auth::id() == $bill->user_id)
                    
                        @if ($bill->status == 'Pendiente')
                            <div class="" style=''>
                                <a href="{{ route('bills.edit', $bill->id) }}" class="btn btn-success btn-sm"></a>
                            </div>

                        @endif
                    @endif

                </div>
            @endauth
        </div>
        <div class="row mt-4">
            <div class="col s6">
                <h6 class="card-subtitle my-2 text-muted"> {{ $bill->created_at }}</h6>
            </div>
        </div>
    </div>
</div>
