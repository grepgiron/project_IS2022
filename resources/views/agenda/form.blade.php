<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Registro #') }}
            {{ Form::text('id_user', $agenda->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'readonly','placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Detalle') }}
            {{ Form::text('descripcion', $agenda->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-4">
        <a href="{{ route('agendas.index') }}" class="btn btn-outline-secondary">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="hidden-xs">
                Atras
            </span>
        </a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>