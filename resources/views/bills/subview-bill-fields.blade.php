<div class="d-flex justify-content-center">
    <div class="mb-3">
        <label for="bill" class="form-label">Cancelar la factura</label>
        {!! Form::hidden('start_date', $bill->startDate) !!}
        {!! Form::hidden('final_date', $bill->finishDate) !!}
        {!! Form::hidden('status', 'Pago') !!}
    </div>
</div>
