@extends('plantillauth')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <h1>Crear una cuenta</h1>
    {{-- NAME --}}
    <div class="mb-3">
        <label for="name" class="form-label">NOMBRE</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    {{-- USER --}}
    <div class="mb-3">
        <label for="user" class="form-label">USUARIO</label>
        <input id="user" type="text" class="form-control @error('user') is-invalid @enderror" name="user"
            value="{{ old('user') }}" required autocomplete="user" autofocus>

        @error('user')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- EMAIL --}}
    <div class="mb-3">
        <label for="email" class="form-label">CORREO ELECTRÓNICO</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- PASSWORD --}}
    <div class="mb-3">
        <label for="password" class="form-label">CONTRASEÑA</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
            required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- PASSWORD CONFIRM --}}
    <div class="mb-3">
        <label for="password-confirm" class="form-label">CONFIRMA LA CONTRASEÑA</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">
    </div>

    <div class="d-grid gap-2 col-12">
        <button type="submit" class="btn btn-primary">Registrarse</button>
        <div id="help-login" class="form-text">
            <a href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
        </div>
    </div>
</form>
@endsection
