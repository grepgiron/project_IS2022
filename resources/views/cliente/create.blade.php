@extends('layouts.app')

@section('template_title')
    Create Cliente
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Crear Cliente</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
