<div class="card mb-2">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="" style=''>
                <a href="{{ url('/properties/'.$property->id) }}" class="link-dark">
                    <h5 class="card-title">
                        <i class="fa-solid fa-clipboard"></i>
                        <b>{{ $property->name }}</b>
                        {{-- {{ $category->name }} --}}
                    </h5>
                </a>
                <h6><b>Área: </b>{{ $property->area }}</h6>
                <h6><b>Capacidad: </b>{{ $property->capacity }}</h6>
                <h6><b>Costo Diario: </b>{{ $property->daily_rental_cost }}</h6>
                <h6><b>Ciudad: </b>{{ $property->city }}</h6>
            </div>
            @auth
            <div class="d-flex justify-content-between">
                @if (Auth::user()->role === "Admin" || Auth::id() === $property->user_id)
                    <div class="" style=''>
                        <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-info btn-sm">
                            <i class="fa-solid fa-pen-to-square" title="Editar Inmueble"></i>
                        </a>
                    </div>
                    &nbsp;
                    <div>
                        {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}
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
                <h6 class="card-subtitle my-2 text-muted"> {{ $property->created_at }}</h6>
            </div>
            {{-- <div class="col s6" style='text-align:right'>
                <h6 class="card-subtitle my-2 text-muted">{{ $property->category_id }} </h6>
            </div> --}}
            <p class="card-text"> {{ $property->description }} </p>
        </div>
    </div>
</div>
