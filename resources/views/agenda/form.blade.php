<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $agenda->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>