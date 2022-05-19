@extends('plantillauth')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <h1>Recuperación de contraseña</h1>
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-3">
            <label for="email" class=" col-form-label"> CORREO ELECTRÓNICO </label>
            <input maxlength="100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="col-form-label">CONTRASEÑA</label>
            <input maxlength="100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password-confirm" class="col-form-label">CONFIRMA LA CONTRASEÑA</label>
            <input maxlength="100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>

        <div class="d-grid gap-2 col-12">
            <button type="submit" class="btn btn-primary">
                Cambiar contraseña
            </button>
        </div>
    </form>
@endsection
