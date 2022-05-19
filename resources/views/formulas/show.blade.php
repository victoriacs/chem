@extends('plantilla')

@section('title', 'Fórmulas | ' . $formula->nombre_comun)

@section('content')
    <div class="container mt-3">
        <div class="mt-1 row border-top border-bottom color-border-muted p-3">
            <div class="col-12 d-inline-block mb-1 d-flex align-items-center">
                <h2>{{ $formula->nombre_comun }}</h2>
                @auth
                @if ($formula->isFavorited($formula->id))
                    <div class="ms-3"><a id="{{$formula->id}}" class="unfav"><i class="bi bi-heart-fill"></i></a></div>
                @else
                    <div class="ms-3"><a id="{{$formula->id}}" class="fav"><i class="bi bi-heart"></i></a></div>
                @endif
                    <div class="col offset-lg-9 actions d-flex justify-content-end" style="float: right;">
                        @can('update', $formula)
                            <a style="font-size: 26px" href="{{ route('formulas.edit', $formula) }}"><i class="bi bi-pencil-fill bi-lg"></i></a>
                        @endcan
                        @can('delete', $formula)
                   
                            <a style="font-size: 26px" class="ps-1" href="#" data-target="#modalDelete" data-toggle="modal"><i
                                    class="bi bi-trash-fill"></i>
                            </a>
                            <div class="flex justify-content-center align-items-center modal fade modal-fade-in-scale-up" id="modalDelete"
                            aria-labelledby="Cambia tu nombre de usuario" role="dialog" tabindex="-1" style="display: none;"
                            aria-hidden="true">
                            <div class="modal-dialog modal-simple">
                                <div class="modal-content">
                                    <div class="modal-header" style="border-bottom: 0 none;">
                                        <h4 class="modal-title text-center">Vas a eliminar esta fórmula</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Esta fórmula se borrará y desaparecerá del listado.
                                        ¿Estás seguro de eliminar la fórmula?
                                    </div>
                                    <div class="modal-footer" style="border-top: 0 none;">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No, déjalo</button>
                                        <button type="submit" onclick="document.getElementById('delete-project').submit()"
                                            form="formUser" class="btn btn-danger">Sí, eliminar</button>
                                            <form class="d-none" id="delete-project" method="POST"
                                            action="{{ route('formulas.destroy', $formula) }}">
                                            @csrf @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        @endcan
                    </div>
                @endauth
            </div>

            <h5>Descripción</h5>
            <div class="col-12">
                <p style="color: black;">{{ $formula->descripcion }}</p>
            </div>

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
