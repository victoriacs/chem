@extends('plantilla')
<link href="{{ asset('css/user.css') }}" rel="stylesheet" type="text/css">
@section('title', 'CHEM')


@section('content')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

    <div class="container-fluid mt-1">
        <div id="rowUser" class="row">
            <div id="user" class="col-lg-2 col-12 p-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 col-lg-12 d-flex justify-content-lg-center">
                                <img class="image rounded-circle img-fluid"
                                    src="{{ asset('/storage/images/' . $user->image) }}" alt="profile_image" width="220"
                                    height="220">
                            </div>
                            <div class="col-9 col-lg-12 mt-2">
                                @if ($user->name)
                                    <h4>{{ $user->name }}</h4>
                                @endif
                                <p>{{ $user->user }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        @if ($user->bio)
                            <p>{{ $user->bio }}</p>
                        @endif
                        @if ($user == Auth::user())
                            <a class="btn btn-primary btn-block btn-xs my-2" href="{{ route('conf.perfil') }}">Editar</a>
                        @endif
                        @if ($user->location)
                            <div class="align-items-center d-flex">
                                <span> <i class="material-icons">location_on</i></span>
                                <span class="p">{{ $user->location }}</span>
                            </div>
                        @endif
                        @if ($user->birthday)
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-12 p-4">
                <ul class="nav nav-tabs">
                    {{-- {{ dd(request()->is("usuario/$user->user/formulas" || "usuario/$user->user")) }} --}}
                    <li class="nav-item" id="FormulasNoGuardads">
                        <a href="{{ route('perfil.formulas',$user->user) }}" class="nav-link {{ request()->is("usuario/$user->user") ? 'active' : null }} {{ request()->is("usuario/".$user->user."/formulas") ? 'active' : null }}" role="tab">Mis
                            fórmulas</a>
                    </li>
                    <li class="nav-item" id="FormulasGuardadas">
                        <a class="nav-link  {{ request()->is("usuario/".$user->user."/formulas-favoritas") ? 'active' : null }}" href="{{ route('perfil.fav',$user->user) }}" role="tab">Fórmulas guardadas</a>
                    </li>
                </ul>
                <div class="tab-content">
                    @yield('content')
                    <div class="overflow-auto tab-pane fade show {{ request()->is("usuario/".$user->user."/formulas") ? 'active' : null }} {{ request()->is("usuario/$user->user") ? 'active' : null }} " id="{{ route('perfil.formulas',$user->user) }}" role="tabpanel"
                        aria-labelledby="formulas-tab">
                        @include('user.formulas')
                    </div>
                    <div class="overflow-auto tab-pane fade show {{ request()->is("usuario/".$user->user."/formulas-favoritas") ? 'active' : null }} " id="{{ route('perfil.fav',$user->user) }}" role="tabpanel"
                        aria-labelledby="formulas-tab">
                        @include('user.formulas-favoritas')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
