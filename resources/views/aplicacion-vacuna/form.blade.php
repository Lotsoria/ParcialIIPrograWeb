<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::select('persona_id', $personas, $aplicacionVacuna->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marcas_id') }}
            {{ Form::select('marcas_id',$marcas , $aplicacionVacuna->marcas_id, ['class' => 'form-control' . ($errors->has('marcas_id') ? ' is-invalid' : ''), 'placeholder' => 'Marcas Id']) }}
            {!! $errors->first('marcas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dosis_id') }}
            {{ Form::select('dosis_id', $dosis, $aplicacionVacuna->dosis_id, ['class' => 'form-control' . ($errors->has('dosis_id') ? ' is-invalid' : ''), 'placeholder' => 'Dosis Id']) }}
            {!! $errors->first('dosis_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>