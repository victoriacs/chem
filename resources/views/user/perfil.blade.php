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
<style>
  .toast-success {
      background-color: rgb(32, 168, 32);
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

   <script>
       $(document).ready(function() {
           toastr.options.timeOut = 10000;
           @if (Session::has('error'))
               toastr.error('{{ Session::get('error') }}');
           @elseif(Session::has('success'))
               toastr.success('{{ Session::get('success') }}');
           @endif
       });

   </script>
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
    </form>
        <button type="submit" form="upload" value="Upload" class="btn btn-primary">Guardar cambios</button>
    </div>
</div>
@endsection
