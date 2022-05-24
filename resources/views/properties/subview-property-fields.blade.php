<div class="container">
    <div class="section">
        <div class="row">

            <div class="col s6">

                <div class="form-floating mb-3">
                    {!! Form::text('name', null, ['class'=>"form-control", 'placeholder'=>"Nombre del inmueble", 'rows'=>1]) !!}
                    <label for="name">Nombre del inmueble</label>
                </div>

                <div class="form-floating mb-3">
                    {!! Form::textarea('description', null, ['class'=>"form-control", 'placeholder'=>"Descripcion del inmueble", 'rows'=>1]) !!}
                    <label for="description">Descripcion del inmueble</label>
                </div>

                <div class="form-floating mb-3">
                    {!! Form::number('area', null, ['class'=>"form-control", 'placeholder'=>"Area del inmueble"]) !!}
                    <label for="area">Area del inmueble en (m2)</label>
                </div>

                <div class="form-floating mb-3">
                    {!! Form::number('capacity', null, ['class'=>"form-control", 'placeholder'=>"Capacidad maxima", 'rows'=>1]) !!}
                    <label for="capacity">Cuántos huespedes?</label>
                </div>

                <div class="form-floating mb-3">
                    {!! Form::text('address', null, ['class'=>"form-control", 'placeholder'=>"direccion del inmueble", 'rows'=>1]) !!}
                    <label for="address">Dirección del inmueble</label>
                </div>

                <div class="form-floating mb-3">
                    {!! Form::number('dailyRent', null, ['class' => "form-control", 'placeholder' => 'Costo Diario', 'min'=>100]) !!}
                    <label for="dailyRent">Valor diario del arrendamiento</label>
                </div>

                <div class="form-floating mb-3">
                    {!! Form::text('city', null, ['class' => "form-control", 'placeholder'=>"Ciudad", 'rows'=>1]) !!}
                    <label for="city">Ciudad</label>
                </div>

                <label for="imagenes" class="form-label">Imágenes:</label>
                {!! Form::file('imagenes[]', ['class' => 'form-control', 'id' => 'input-file-now--custom-3', 'multiple', 'accept' => 'image/*']) !!}

            </div>
        </div>
    </div>
</div>


