@extends('layouts.app')

@section('template_title')
    {{ $veterinario->name ?? 'Show Veterinario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Veterinario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('veterinarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $veterinario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $veterinario->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $veterinario->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
