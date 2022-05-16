@extends('plantilla')

@section('title', 'Fórmulas | ' . $formula->nombre_comun)

@section('content')
    <div class="container mt-3">
        <div class="mt-1 row border-top border-bottom color-border-muted p-3">
            <div class="col d-inline-block mb-1 d-flex align-items-center">
                <h2>{{ $formula->nombre_comun }}</h2>
                <i class="ms-1 fa-solid fa-heart"></i>
                @auth
                    <div class="col offset-lg-10 actions d-flex justify-content-end" style="float: right;">
                        @can('update', $formula)
                            <a style="font-size: 26px" href="{{ route('formulas.edit', $formula) }}"><i class="bi bi-pencil-fill bi-lg"></i></a>
                        @endcan
                        @can('delete', $formula)
                            <a style="font-size: 26px" class="ps-1" href="#" onclick="document.getElementById('delete-project').submit()"><i
                                    class="bi bi-trash-fill"></i>
                            </a>
                            <form class="d-none" id="delete-project" method="POST"
                                action="{{ route('formulas.destroy', $formula) }}">
                                @csrf @method('DELETE')
                            </form>
                        @endcan
                    </div>
                @endauth
            </div>

            <h5>Descripción</h5>
            <p style="color: black;">{{ $formula->descripcion }}</p>

            <h5>Nombre sistemático</h5>
            <p style="color: black;">{{ $formula->nombre_sistematico }}</p>

            <h5>Tipo</h5>
            <p><a href="{{ route('categorias.show', $formula->categoria) }}">{{ $formula->categoria->nombre }}</a></p>

            <h5>Fórmula</h5>
            <div class="d-inline-block d-flex">
                {{ $formula->elemento_1 }}
                @if ($formula->elemento_2)
                    + {{ $formula->elemento_2 }}
                @endif
                @if($formula->elemento_3)
                    + {{ $formula->elemento_3 }}
                @endif
            </div>
            <div class="f6 color-fg-muted mt-2 d-flex justify-content-end">
                Creado por: &nbsp;<a
                    href="{{ route('perfil.index', $formula->user->user) }}">{{ $formula->user->user }}</a>
                    <a class="ms-3" href="{{ route('formulas.index') }}">Volver atrás</a>
        </div>
    </div>
@endsection
