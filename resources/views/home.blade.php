@extends('layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
    <section class="content container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a type="button" href="{{ route('citas.create') }}" class="btn btn-sm btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    Nueva Cita
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">En Proceso</div>
                    <div class="card-body">
                      <h5 class="card-title">Citas pendientes de atender {{ $active->count() }}</h5>
                      <p class="card-text">Citas para hoy {{ $today->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Finalizadas</div>
                    <div class="card-body">
                      <h5 class="card-title">Citas finalizadas {{ $complete->count() }}</h5>
                      <p class="card-text">.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Canceladas</div>
                    <div class="card-body">
                      <h5 class="card-title">Citas canceladas {{ $close->count() }}</h5>
                      <p class="card-text">.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Veterinario</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($citas as $cita)
                            <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td>{{ $cita->veterinario->nombre }}</td>
                                <td>{{ $cita->cliente->nombre }}</td>
                                <td>{{ $cita->fecha }}</td>
                                <td>{{ $cita->hora }} </td>
                                <td>
                                    <a href="{{ route('citas.show',$cita->id) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Ver') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main> 
@endsection
