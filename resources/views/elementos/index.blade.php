@extends('plantilla')
<style>
    p {
        color: black !important;
    }
</style>
<script src="{{ asset('js/elementos.js') }}"></script>
<link href="{{ asset('css/elementos.css') }}" rel="stylesheet">

@section('title', 'Lista de elementos')

@section('content')
    <div class="container mt-2">
        <a href="{{ route('elementos.lista') }}" class="display-5 mb-0 h1">ELEMENTOS</a>
        <span class="ms-3 lead text-secondary">Listado de elementos</span>
        <div class="row py-3">
            <div class="col-lg-12 col-11">
                <form class="d-flex input-group mb-2">
                    <input style="background: white;" name="busqueda" type="search" class="form-control rounded"
                        placeholder="Buscar" aria-label="Search" aria-describedby="search-addon">
                    <span class="input-group-text border-0 btn btn" id="search-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                            </path>
                        </svg>
                    </span>
                </form>
                
            </div>

            <div class="col-1 d-lg-none">
                <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#filtresRight"
                    aria-controls="offcanvasWithBackdrop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-filter-right" viewBox="0 0 16 16">
                        <path
                            d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z">
                        </path>
                    </svg>
                </button>
                <div style="width: 350px" class="offcanvas offcanvas-end" tabindex="-1" id="filtresRight"
                    aria-labelledby="filtresRightLabel">
                    <div class="offcanvas-header">
                        <h4 id="filtresRightLabel">Series</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body filter-content">
                        @include('partials.series')
                    </div>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-2 col-lg-3">
            <div class="d-none d-lg-block">
                <aside>
                    <div class="card">
                        <article class="card-group-item">
                            <header class="card-header">
                                <h3 class="title text-center">Series</h3>
                            </header>
                            <div class="filter-content">
                                @include('partials.series')
                            </div>
                        </article>
                    </div>
                </aside>
            </div>
        </div>

        <div class="col-12 col-lg-9">
            <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                @forelse($elementos as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{ $item->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                aria-controls="flush-collapse{{ $item->id }}">
                                {{ $item->id }} - {{ $item->simbolo }} | {{ $item->nombre }}
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading{{ $item->id }}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h5>Información general</h5>
                                <ul>
                                    <li>
                                        <p><b>Numero atómico: </b>{{ $item->id }}</p>
                                    </li>
                                    <li>
                                        <p><b>Símbolo: </b>{{ $item->simbolo }}</p>
                                    </li>
                                    <li>
                                        <p><b>Nombre: </b>{{ $item->nombre }}</p>
                                    </li>
                                    <li>
                                        <p><b>Serie: </b>{{ $item->serie->nombre }}</p>
                                    </li>
                                    <li>
                                        <p><b>Capa electrones: </b>{{ $item->electrones }}</p>
                                    </li>
                                </ul>
                                <h5>Propiedades físicas</h5>
                                <ul>

                                    <li>
                                        <p><b>Estado común: </b>{{ $item->estado }}</p>
                                    </li>
                                    @if ($item->densidad)
                                        <li>
                                            <p><b>Densidad: </b>{{ $item->densidad }}<small> km/m<sup>3</sup></small></p>
                                        </li>
                                    @endif

                                    @if ($item->fusionK)
                                        <li>
                                            <p><b>Punto de fusión: </b>{{ $item->fusionK }} K ({{ $item->fusionC }}
                                                °C)</p>
                                        </li>
                                    @endif

                                    @if ($item->ebullicionK)
                                        <li>
                                            <p><b>Punto de ebullición: </b>{{ $item->ebullicionK }} K
                                                ({{ $item->ebullicionC }} °C)</p>
                                        </li>
                                    @endif

                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>

                @empty
                    @if ($elementos->currentPage() > $elementos->lastPage())
                    @else
                        <li class="list-group-item border-0 mb-3 shadow-sm">
                            No hay ningún elemento con ese nombre
                        </li>
                    @endif
                @endforelse
                <div class="pt-3 d-flex justify-content-center">
                    {{ $elementos->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
