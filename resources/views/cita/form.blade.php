<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $cita->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::time('hora', $cita->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-4">
            {{ Form::label('veterinario') }}
            {{ Form::select('id_veterinario', $veterinarios, $cita->id_veterinario, ['class' => 'form-control' . ($errors->has('id_veterinario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_veterinario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::select('id_cliente', $clientes, $cita->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::text('observacion', $cita->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row justify-content-start mt-2">
            <div class="col-2">
                <div class="form-check">
                    {{ Form::label('Activa') }}
                    {{ Form::radio('estado', 'Activa', $cita->estado == 'Activa', ['class' => 'form-check-input']) }}
                </div>

            </div>
            <div class="col-2">
                <div class="form-check">
                    {{ Form::label('Finalizada') }}
                    {{ Form::radio('estado', 'Finalizada', $cita->estado == 'Finalizada', ['class' => 'form-check-input']) }}
                </div>

            </div>
            <div class="col-2">
                <div class="form-check">
                    {{ Form::label('Cancelada') }}
                    {{ Form::radio('estado', 'Cancelada', $cita->estado == 'Cancelada', ['class' => 'form-check-input']) }}
                </div>

            </div>
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-4">


        </div>

    </div>
    <div class="box-footer mt20 mt-4">
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="hidden-xs">
                Atras
            </span>
        </a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>