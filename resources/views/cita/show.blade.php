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
                                <a href="{{ route('citas.index') }}" class="btn btn-sm  btn-secondary">
                                    <i class="fa fa-fw fa-list-alt"></i>
                                    <span class="hidden-xs">
                                        Atras
                                    </span>
                                </a>
                                @if ($cita->estado == 'Activa')
                                    <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-sm btn-success">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                        <span class="hidden-xs">
                                            Editar
                                        </span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($cita->estado == 'Cancelada')
                            <div class="alert alert-danger">
                                <p>Esta cita fue cancelada</p>
                            </div>
                        @endif
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            <div class="form-control">
                                {{ $cita->fecha }}
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            <div class="form-control">
                                {{ $cita->hora }}
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            <div class="form-control">
                                {{ $cita->estado }}
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Veterinario:</strong>
                            <div class="form-control">
                                {{ $cita->veterinario->nombre }}
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            <div class="form-control">
                                {{ $cita->cliente->nombre }}
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <strong>Agenda:</strong>
                            <div class="form-control">
                                {{ $cita->agenda->descripcion }}
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            <div class="form-control">
                                {{ $cita->observacion }}
                            </div>
                            
                        </div>
                        <div class="mt-4">
                            @if ($cita->estado == 'Activa')
                                <form action="{{ route('citas.destroy',$cita->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-fw fa-trash"></i> Cancelar Cita</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
