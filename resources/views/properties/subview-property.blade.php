<div class="card text-white bg-dark mb-3" >
    <div class="card-body d-flex justify-content-between">

        {{-- <div class="col-md-4">
            <img src="{{ $property->image }}" class="img-fluid rounded-start">
        </div> --}}
        <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">{{ $property->name }}</h4>
                <h6 class="card-title">Ciudad: {{ $property->city }}</h6>
                <p class="card-text">Valor: ${{ $property->dailyRent }}</p>
                <p class="card-text">Metros: {{ $property->area }}m2</p>
                <p class="card-text">Caracteristicas: {{ $property->description }}</p>
                <p class="card-text">Arrendatario: {{ $property->user_id }}</p>
                {{-- <p class="card-subtitle mb-2 text-muted">Publicado hace: {{ $property->created_at->diffForHumans() }}</p> --}}
                <a class="btn btn-primary" href="#" role="button">Reservar</a>

            </div>
        </div>

    </div>
</div>
