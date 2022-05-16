@extends('plantilla')
<link href="{{ asset('css/modal.css') }}" rel="stylesheet" type="text/css">
<script src="{{ asset('/js/modal.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


@section('title', 'SETTINGS')

@section('content')
<div class="container mt-2">
<div class="row">
    <div class="col-lg-2 col-12">
        <ul class="nav flex-column" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="{{ route('conf.perfil') }}"><i class="bi bi-person-fill"></i> Perfil</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="{{ route('conf.cuenta') }}"><i class="bi bi-gear-fill"></i> Cuenta</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-10 col-12">
        @yield('contentUser')
        @endsection
    </div>
</div>
</div>



