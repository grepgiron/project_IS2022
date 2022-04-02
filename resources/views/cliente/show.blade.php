@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
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
                                <h4>Datos de Cliente</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                                    <i class="fa fa-fw fa-list-alt"></i>
                                    <span class="hidden-xs">
                                        Atras
                                    </span>
                                </a>
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-success">
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
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $cliente->dni }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
