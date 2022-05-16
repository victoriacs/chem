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
                                <img class="image rounded-circle img-fluid" src="{{ asset('/storage/images/' . $user->image) }}"
                                    alt="profile_image" width="220" height="220">
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
                    <li class="nav-item">
                        <a class="nav-link active" id="formulas-tab" href="#formulas" role="tab">Mis fórmulas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formulas-guardadas">Fórmulas guardadas</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="overflow-auto tab-pane fade show active" id="formulas" role="tabpanel" aria-labelledby="formulas-tab">
                        <ul class="list-group mb-3 border-top color-border-muted">
                            @forelse($formulas as $item)
                                <li class="col-12 d-flex width-full py-4 border-bottom color-border-muted">
                                    <div class="col-10 col-lg-9">
                                        <div class="d-inline-block mb-1 d-flex align-items-center">
                                            <span class="h3"><a href={{ route('formulas.show', $item->url) }}>
                                                    {{ $item->nombre_comun }}
                                                </a></span>
                                            <span
                                                class="badge rounded-pill bg-secondary ml-1 mb-1">{{ $item->categoria->nombre }}</span>
                                            <div class="ms-3"><i class="fa-solid fa-heart"></i></div>
                                        </div>
                                        <div>
                                            <p class="text-truncate mb-2">
                                                {{ $item->descripcion }}
                                            </p>
                                        </div>
                                        <div class="f6 color-fg-muted mt-2">
                                            Creado por: <a href="{{ route('perfil.index', $item->user->user) }}">
                                                {{ $item->user->user }}</a>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                        @empty
                        <div id="empty" class="d-flex justify-content-center">
                            @if($user == Auth::user()) 
                                <h4>Aún no has creado fórmulas.</h4>
                            @else
                                <h4>{{ $user->user }} no ha creado fórmulas.</h4>
                            @endif
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
