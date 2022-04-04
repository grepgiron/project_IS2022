@extends('layouts.app')

@section('template_title')
    {{ $veterinario->name ?? 'Show Veterinario' }}
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
                                <h4>Datos de Veterinario</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('veterinarios.index') }}" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-fw fa-list-alt"></i>
                                    <span class="hidden-xs">
                                        Atras
                                    </span>
                                </a>
                                <a href="{{ route('veterinarios.edit', $veterinario->id) }}" class="btn btn-sm btn-success">
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
                            <strong>Nombre:</strong>
                            <div class="form-control">
                                {{ $veterinario->nombre }}
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            <div class="form-control">
                                {{ $veterinario->direccion }}
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            <div class="form-control">
                                {{ $veterinario->telefono }}
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
