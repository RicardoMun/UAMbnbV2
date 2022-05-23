<div class="container">
    <div class="section">

        <div class="row">

            <div class="col s6">
                <div class="form-floating mb-3">
                    {!! Form::text('nombre', null, ['class'=>"form-control", 'placeholder'=>"Nombre del inmueble", 'rows'=>1] ) !!}
                    <label for="nombre">Nombre del inmueble</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::textarea('descripcion', null, ['class'=>"form-control", 'placeholder'=>"Descripcion del inmueble", 'rows'=>1] ) !!}
                    <label for="descripcion">Descripcion del inmueble</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::number('area', null, ['class'=>"form-control", 'placeholder'=>"Area del inmueble"] ) !!}
                    <label for="area">Area del inmueble en (m2)</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::text('capacidad', null, ['class'=>"form-control", 'placeholder'=>"Capacidad maxima", 'rows'=>1] ) !!}
                    <label for="capacidad" class="form-label">Capacidad máxima de huespedes</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::textarea('caracteristicas', null, ['class'=>"form-control", 'placeholder'=>"Caracteristicas", 'rows'=>1] ) !!}
                    <label for="caracteristicas">Características</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::textarea('direccion', null, ['class'=>"form-control", 'placeholder'=>"Direccion", 'rows'=>1] ) !!}
                    <label for="direccion">Direccion</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::textarea('valor', null, ['class'=>"form-control", 'placeholder'=>"Valor", 'rows'=>1] ) !!}
                    <label for="valor">Valor diario del arrendamiento</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::textarea('caracteristicas', null, ['class'=>"form-control", 'placeholder'=>"Caracteristicas", 'rows'=>1] ) !!}
                    <label for="caracteristicas">Características</label>
                </div>
                <div class="form-floating mb-3">
                    {!! Form::file('fotos', null, ['class'=>"form-control", 'enctype'=> "multipart/form-data", 'rows'=>1]) !!}
                    <label for="fotos"></label>
                </div>
            </div>
        </div>
    </div>
</div>

