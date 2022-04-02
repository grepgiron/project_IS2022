@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? 'Show Cita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $cita->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $cita->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cita->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Veterinario:</strong>
                            {{ $cita->id_veterinario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $cita->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Agenda:</strong>
                            {{ $cita->id_agenda }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $cita->observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
