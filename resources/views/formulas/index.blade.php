@extends('plantilla')
@section('title', 'Fórmulas')

@section('content')
    <div class="container mt-2">
        <a href="{{ route('formulas.index') }}" class="display-5 mb-0 h1">FÓRMULAS</a>
        <span class="ms-3 lead text-secondary">Listado de fórmulas</span>
        <div class="row py-3">
                @auth
                <div class="col-lg-11 col-9">
                    <form class="d-flex input-group mb-2">
                        <input style="background: white;" name="busqueda" type="search" class="form-control rounded"
                            placeholder="Buscar" aria-label="Search" aria-describedby="search-addon">
                        <span class="input-group-text border-0" id="search-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                        </span>
                    </form>
                </div>
                <div class="col-3 col-lg-1">
                    <a class="btn btn-primary" href="{{ route('formulas.create') }}">Crear</a>
                </div>
                @else
                <div class="col-lg-12 col-12">
                    <form class="d-flex input-group mb-2">
                        <input style="background: white;" name="busqueda" type="search" class="form-control rounded"
                            placeholder="Buscar" aria-label="Search" aria-describedby="search-addon">
                        <span class="input-group-text border-0" id="search-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                        </span>
                    </form>
                </div>
                @endauth
        </div>

        <ul class="list-group mb-3 border-top color-border-muted">
            @forelse ($formulas as $item)
                <li class="col-12 d-flex py-4 border-bottom color-border-muted">
                    <div class="col-12">
                        <div class="d-inline-block mb-1 d-flex align-items-center">
                                <span class="h3"><a href={{ route('formulas.show', $item->url) }}>
                                        {{ $item->nombre_comun }}
                                    </a></span>
                               <a href="{{ route('categorias.show', $item->categoria) }}"><span class="badge rounded-pill bg-secondary ml-1 mb-1">{{ $item->categoria->nombre }}</span></a>
                               <div class="ms-3"><a id="fav" href="#"><i class="fa-solid fa-heart"></i></a></div>
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
            @empty
            <li class="col-12 d-flex width-full py-4 border-bottom color-border-muted private source" itemprop="owns" itemscope="" itemtype="http://schema.org/Code">
                <h3>No hay fórmulas con ese nombre o parecidos</h3>
            </li>
            @endforelse
        </ul>
        <div class="pagination justify-content-center">
            {!! $formulas->appends(['busqueda' => $busqueda]) !!}
        </div>
    </div>

@endsection
