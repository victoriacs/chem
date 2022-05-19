@extends('plantillauth')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    
    <h1>Iniciar sesión</h1>
    <div class="mb-3">
        <label for="user" class="form-label">CORREO ELECTRÓNICO O USUARIO</label>
        <input maxlength="20" id="user" type="user" class="form-control  @if (session('error')) is-invalid @endif" name="user" value="{{ old('user') }}" required autofocus>
        @if (session('error'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ session('error') }}</strong>
        </span>
        @endif
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">CONTRASEÑA</label>
        <input maxlength="100" id="password" type="password" class="form-control @if (session('error')) is-invalid @endif" name="password" required autocomplete="current-password">
        @if (session('error'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ session('error') }}</strong>
        </span>
        @endif

        <div id="help-pswd" class="form-text">
            <a href="{{ route('password.request') }}">¿Has olvidado la contraseña?</a>
        </div>
    </div>

    <div class="d-grid gap-2 col-12">
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        <div id="help-login" class="form-text">
            Necesitas una cuenta? <a href="{{ route('register') }}">Registrarse</a>
        </div>
    </div>
</form>
@endsection
