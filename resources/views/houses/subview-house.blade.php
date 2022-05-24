{{-- <div class="card text-white bg-dark mb-3" >
    <div class="card-body d-flex justify-content-between">



        <div class="col-md-4">
            <img src="{{ $house->photo }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $house->name }}</h5>
                <p class="card-text">Valor: ${{ $->price }}</p>
                <p class="card-text">Metros: {{ $house->area }}m2</p>
                <p class="card-text">Caracteristicas: {{ $house->characteristics }}</p>

                <a class="btn btn-primary" href="{{ route('bills.index') }}" role="button">Reservar</a>

            </div>
        </div>

        <div class="text-right">

            <a href="{{ route('houses.edit', $house->id) }}" class="btn btn-info">
                <i class="fa-solid fa-pen icons" title="Edit post" ></i>
            </a>

            {!! Form::open(['route' => ['houses.destroy', $house->id], 'method' => 'delete']) !!}
            <br>
            {!! Form::button('<i class="fa-solid fa-trash icons"></i>', [
                'type' => 'submit',
                'title' => "Eliminar house",
                'class' => 'btn btn-danger',
                'onclick' => "return confirm('¿Estás seguro de eliminar este house?')"
            ])!!}

            {!! Form::close() !!}
        </div>

    </div>
</div>
 --}}
