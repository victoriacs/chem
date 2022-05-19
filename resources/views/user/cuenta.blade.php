@extends('plantillauser')

@section('title', 'CHEM')

@section('contentUser')
<style>
    .toast-success {
        background-color: rgb(32, 168, 32);
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

     <script>
         $(document).ready(function() {
             toastr.options.timeOut = 10000;
             @if (Session::has('error'))
                 toastr.error('{{ Session::get('error') }}');
             @elseif(Session::has('success'))
                 toastr.success('{{ Session::get('success') }}');
             @endif
         });
 
     </script>
    @if ($errors->has('newPwd') || $errors->has('confirmNewPwd') || session('currentPwd'))
        <script>
            $(document).ready(function() {
                $('#modalPassword').modal('show');
            });
        </script>
    @elseif (session('user'))
        <script>
            $(document).ready(function() {
                $('#modalUsername').modal('show');
            });
        </script>
    @elseif (session('email'))
        <script>
            $(document).ready(function() {
                $('#modalEmail').modal('show');
            });
        </script>
    @endif
                    <div class="row">
                        <div class="col-lg-10 col-12">
                                <h5>Usuario</h5>
                                    <p>
                                        {{ Auth::user()->user }}
                                    </p>
                                    <button class="btn btn-primary btn-outline btn-default" data-target="#modalUsername"
                                     data-toggle="modal" type="button">Editar</button>
                            <div class="flex justify-content-center align-items-center modal fade modal-fade-in-scale-up"
                                id="modalUsername" aria-labelledby="Cambia tu nombre de usuario" role="dialog" tabindex="-1"
                                style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-simple">
                                    <div class="modal-content">
                                        <div class="modal-header" style="border-bottom: 0 none;">
                                            <h4 class="modal-title text-center">Cambia tu nombre de usuario</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="formUser" method="POST" action="{{ route('user.updateUser') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="user" class="form-label">NOMBRE DE USUARIO</label>
                                                    <input id="user" type="user"
                                                        class="form-control @if (session('user')) is-invalid @endif"
                                                        name="user" value="{{ old('user') }}" required autofocus>
                                                    @if (session('user'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ session('user') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer" style="border-top: 0 none;">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="submit" form="formUser" class="btn btn-primary">Listo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-10 col-12">
                            <h5>Correo electrónico</h5>
                            <p>
                                {{ Auth::user()->email }}
                            </p>
                            <button class="btn btn-primary btn-outline btn-default" data-target="#modalEmail"
                                data-toggle="modal" type="button">Editar</button>
                            <div class="flex justify-content-center align-items-center modal fade modal-fade-in-scale-up"
                                id="modalEmail" aria-labelledby="Cambia tu nombre de usuario" role="dialog" tabindex="-1"
                                style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-simple">
                                    <div class="modal-content">
                                        <div class="modal-header" style="border-bottom: 0 none;">
                                            <h4 class="modal-title text-center">Cambia tu correo electrónico</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="formEmail" method="POST" action="{{ route('user.updateUser') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">CORREO ELECTRÓNICO</label>
                                                    <input id="emailInput" type="email"
                                                        class="form-control @if (session('email')) is-invalid @endif"
                                                        name="email" value="{{ old('email') }}" required autofocus>
                                                    @if (session('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ session('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer" style="border-top: 0 none;">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="submit" form="formEmail" class="btn btn-primary">Listo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <hr>
            <h5>Contraseña</h5>
            <button class="btn btn-primary btn-outline btn-default" data-target="#modalPassword" data-toggle="modal"
                type="button">Cambiar contraseña</button>

            <div class="flex justify-content-center align-items-center modal fade modal-fade-in-scale-up" id="modalPassword"
                aria-labelledby="Cambiar contraseña" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-simple">
                    <div class="modal-content">
                        <div class="modal-header" style="border-bottom: 0 none;">
                            <h4 class="modal-title text-center">Actualiza tu contraseña</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formPassword" method="POST" action="{{ route('user.updateUser') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="currentPwd" class="form-label">CONTRASEÑA ACTUAL</label>
                                    <input id="currentPwd" type="password"
                                        class="form-control @if (session('currentPwd')) is-invalid @endif"
                                        name="currentPwd" required autofocus value="{{ old('currentPwd') }}">
                                    @if (session('currentPwd'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ session('currentPwd') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="newPwd" class="form-label">NUEVA CONTRASEÑA</label>
                                    <input id="newPwd" type="password"
                                        class="form-control @error('newPwd') is-invalid @enderror" name="newPwd" required
                                        value="{{ old('newPwd') }}">
                                    @if ($errors->has('newPwd'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('newPwd') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="confirmNewPwd" class="form-label">CONFIRMAR NUEVA CONTRASEÑA</label>
                                    <input id="confirmNewPwd" type="password"
                                        class="form-control @error('confirmNewPwd') is-invalid @enderror"
                                        name="confirmNewPwd" required value="{{ old('confirmNewPwd') }}">
                                    @if ($errors->has('confirmNewPwd'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('confirmNewPwd') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer" style="border-top: 0 none;">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" form="formPassword" class="btn btn-primary">Listo</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="mb-1">Supresión de cuenta</h6>

            <button class="btn btn-outline-danger btn-default" data-target="#modalDelete" data-toggle="modal"
                type="button">Eliminar cuenta</button>
            <div class="flex justify-content-center align-items-center modal fade modal-fade-in-scale-up" id="modalDelete"
                aria-labelledby="Cambia tu nombre de usuario" role="dialog" tabindex="-1" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog modal-simple">
                    <div class="modal-content">
                        <div class="modal-header" style="border-bottom: 0 none;">
                            <h4 class="modal-title text-center">Vas a borrar tu cuenta</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            Tu cuenta y todas tus fórmulas creadas van a ser eliminadas
                            ¿Estás seguro de eliminar tu cuenta?
                        </div>
                        <div class="modal-footer" style="border-top: 0 none;">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No, déjalo</button>
                            <button type="submit" onclick="document.getElementById('deleteAccount').submit()"
                                form="formUser" class="btn btn-danger">Sí, eliminar</button>
                            <form class="d-none" id="deleteAccount" method="POST"
                                action="{{ route('user.destroy')}}">
                                @csrf @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
