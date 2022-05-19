@extends('plantilla')

@section('title', 'Crear fórmula')

@section('content')
    <div class="container mt-3">
        <h3>Crear fórmula</h3>
        <div class="mt-1 row border-top border-bottom color-border-muted p-3">
            <form 
                method="POST" 
                enctype="multipart/form-data" 
                action="{{ route('formulas.store') }}"> 
                @include('formulas._form')
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary">Guardar</button>
                    <a class="btn" href="{{ route('formulas.index') }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
