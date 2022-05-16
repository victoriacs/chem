@extends('plantilla')
<style>
body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  justify-content: space-between;
}

.hero {
    margin-top: 66px;
}
</style>
@section('title','Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">CHEM</h1>
                <p class="lead text-secondary">
                    La química es el estudio de la materia y los cambios que sufre. Aquí puede buscar información sobre la tabla periódica, información general y físicas sobre los elementos y diferentes fórmulas químicas. 
                    Mantenemos estas lecciones actualizadas gracias a los usuarios activos que los crean, por lo que puede encontrar material nuevo o mejorado aquí de vez en cuando.
                </p>
                <p> Para ver más información sobre los elementos químicos clique sobre este botón.</p>
                    <a class=" mt-2 btn btn-lg w-100 btn-outline-primary" href="{{ route('elementos.lista') }}">Elementos</a>
            </div>
            <div class="col-12 col-lg-6">
                <img id="portada" class="img-fluid mt-4" src="/img/portada.gif" alt="Desarollo web">
            </div>
        </div>
    </div>
@endsection
