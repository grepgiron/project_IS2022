@extends('layouts.app')

@section('template_title')
    Create Cita
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if ($clientes->count() ==  0 || $veterinarios->count() == 0)
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Registros previos!</h4>
                        <p>Para continuar el registro de citas te invitamos a registrar tus veterinarios y clientes, ya que son importantes para continuar el registro.
                        </p>
                        <hr>
                        @if ($clientes->count() == 0)
                            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Registrar Clientes') }}
                            </a>
                        @endif
                        @if ($veterinarios->count() == 0)
                            <a href="{{ route('veterinarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Registrar Veterinarios') }}
                            </a>
                        @endif
                        
                    </div>
                @endif

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Crear Cita</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('citas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cita.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
