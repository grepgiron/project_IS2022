@extends('layouts.app')

<link href="{{ asset('css/signin.css') }}" rel="stylesheet">

@section('content')

    <main class="form-signin mt-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="h3 mb-3 fw-normal text-center">Bienvenido</h1>
            <div class="form-floating">
                
                <input id="email" type="email" id="floatingInput" class="form-control
                @error('email') is-invalid 
                @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="floatingInput" >{{ __('Correo') }}</label>
            </div>

            <div class="form-floating">
                
                <input id="password" type="password" id="floatingPass" class="form-control 
                @error('password') is-invalid 
                @enderror" name="password" required autocomplete="current-password">
                
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="floatingPass" >{{ __('Contraseña') }}</label>
            </div>

            <div class="checkbox mb-3 text-center">
                <label>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    {{ __('Recordar Me') }}
                </label>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-primary">
                {{ __('Iniciar') }}
            </button>

            @if (Route::has('password.request'))
                <div class="mt-4 mb-3 text-center">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvide la contraseña?') }}
                    </a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Registrar</a>
                </div>
            @endif

        </form>
    </main>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvide la contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
