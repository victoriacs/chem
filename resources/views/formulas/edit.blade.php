@extends('plantilla')

@section('title', 'Editar fórmula')

@section('content')
    <div class="container mt-3">
        <div class="mt-1 row border-top border-bottom color-border-muted p-3">
            <form method="POST" enctype="multipart/form-data" action="{{ route('formulas.update', $formula) }}">
                @method('PATCH')
                @include('formulas._form')
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary">Guardar</button>
                    <a class="btn" href="{{ route('formulas.show', $formula) }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
