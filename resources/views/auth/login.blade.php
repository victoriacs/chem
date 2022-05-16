@extends('plantillauth')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h1>Iniciar sesión</h1>
    <div class="mb-3">
        <label for="user" class="form-label">CORREO ELECTRÓNICO O USUARIO</label>
        <input id="user" type="user" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autofocus>

        @error('user')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">CONTRASEÑA</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

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
