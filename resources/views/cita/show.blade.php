@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? 'Show Cita' }}
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto me-auto">
                                <h4>Datos de Cita</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('citas.index') }}" class="btn btn-secondary">
                                    <i class="fa fa-fw fa-list-alt"></i>
                                    <span class="hidden-xs">
                                        Atras
                                    </span>
                                </a>
                                <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-success">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                    <span class="hidden-xs">
                                        Editar
                                    </span>
                                </a>
                            </div>
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
                            <strong>Veterinario:</strong>
                            {{ $cita->veterinario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $cita->cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Agenda:</strong>
                            {{ $cita->agenda->descripcion }}
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
</main>
@endsection
