<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'rows' => 3]); !!}

    <label for="email" class="form-label">Email</label>
    {!! Form::text('email', null, ['class' => 'form-control', 'rows' => 3]); !!}

    <label for="password" class="form-label">Contraseña</label>
    {!! Form::password('password', ['class' => 'form-control', 'rows' => 3]); !!}
</div>
