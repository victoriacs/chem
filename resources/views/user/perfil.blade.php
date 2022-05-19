@extends('plantillauser')
<style>
  form {
    background: none !important;
  }

  input[type="file"] {
    background: none !important;
  }
</style>

@section('title', 'CHEM')

@section('contentUser')
<h4>Mi perfil</h4>
<hr>
<div class="row d-flex flex-row-reverse">
    <form id="upload" action="{{ route('user.upload') }}" class="form-label" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="col-lg-3">
      <label for="name" class="form-label">FOTO DE PERFIL</label>
            <input type="file" name="image">
          </div>
          <br>
    <div class="col-lg-9">
        <label for="name" class="form-label">Nombre</label>
        <input maxlength="30" id="name" type="name" class="form-control @if (session('name')) is-invalid @endif" name="name"
            value="{{ old('name') ?? Auth::user()->name }}" required autofocus>
        <br>

        <label for="bio" class="form-label">Biografía</label><br>
        <textarea maxlength="120" id="bio" name="bio" class="form-control">{{ old('bio') ?? Auth::user()->bio }}</textarea>    

        <br>
        <label for="location" class="form-label">Localización</label>
        <input maxlength="60" id="location" type="name" class="form-control @if (session('location')) is-invalid @endif" name="location"
        value="{{ old('location') ?? Auth::user()->location }}" required>

        <br>
    </form>
        <button type="submit" form="upload" value="Upload" class="btn btn-primary">Guardar cambios</button>
    </div>
</div>
@endsection
