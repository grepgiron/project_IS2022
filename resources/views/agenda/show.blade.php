@extends('layouts.app')

@section('template_title')
    {{ $agenda->name ?? 'Show Agenda' }}
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
                                <h4>{{ $agenda->name ?? 'Datos de Agenda' }}</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('agendas.index') }}" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-fw fa-list-alt"></i>
                                    <span class="hidden-xs">
                                        {{ $agenda->name ?? 'Atras' }}
                                    </span>
                                </a>
                                <a href="{{ route('agendas.edit', $agenda->id) }}" class="btn btn-sm btn-success">
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
                            <label for="name"><strong>Detalle :</strong></label>
                            <div class="form-control">{{ $agenda->descripcion }}</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
