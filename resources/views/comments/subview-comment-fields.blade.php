<div class="mb-3">
    <label for="content" class="form-label">¿Qué deseas opinar?</label>
    {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => 3]) !!}
    {!! Form::hidden('property_id', $property_id) !!}
</div>

