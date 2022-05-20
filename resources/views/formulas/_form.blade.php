<script defer src="{{ asset('js/formulas.js') }}"></script>

@csrf
<label for="nombre_comun" class="form-label">NOMBRE COMÚN <span class="text-danger">*</span></label>
<input maxlength="45" type="text" class="form-control @error('nombre_comun') is-invalid @enderror" name="nombre_comun" value={{ old('nombre_comun', $formula->nombre_comun) }}>
@error('nombre_comun')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
<br>
<label for="descripcion" class="form-label">DESCRIPCIÓN <span class="text-danger">*</span></label>
<textarea  maxlength="350" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion">{{ old('descripcion', $formula->descripcion) }}</textarea>
@error('descripcion')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
<br>
<label for="nombre_sistematico" class="form-label">NOMBRE SISTEMÁTICO <span class="text-danger">*</span></label>
<input maxlength="45" type="text" class="form-control @error('nombre_sistematico') is-invalid @enderror" name="nombre_sistematico"  value={{ old('nombre_sistematico', $formula->nombre_sistematico) }}>
@error('nombre_sistematico')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
<br>
<label for="tipo" class="form-label">TIPO <span class="text-danger">*</span></label>
<select id="tipo" name="tipo" class="form-select @error('tipo') is-invalid @enderror" aria-label="Selecció de tipo">
    <option active></option>
    @foreach($categorias as $id => $name)
    <option value="{{ $id }}"
        @if ($id == old('tipo',$formula->tipo)) selected @endif >
    {{ $name }}</option>
    @endforeach
</select>
@error('tipo')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
<label class="form-label mt-3">FÓRMULA <span class="text-danger">*</span></label>
    <div class="row d-flex align-items-center">
        <div class="col-4 mb-3">
            <select id="elemento_1" name="elemento_1" class="form-select @error('elemento_1') is-invalid @enderror" aria-label="Selección de tipo">
                <option value=" " active></option>
                @foreach($elementos as $elemento)
                <option value="{{ $elemento->simbolo }}"
                    @if ($elemento->simbolo == old('elemento_1', $formula->elemento_1)) selected @endif>
                {{ $elemento->simbolo }}</option>
                @endforeach
            </select>
            @error('elemento_1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-4 d-flex justify-content-center">
            <span id="span2" class="me-4 mt-1">+</span> 
            <select id="elemento_2" name="elemento_2" class="form-select mb-3" aria-label="Selección de tipo">
                <option value=" " active></option>
                @foreach($elementosCompost as $elemento)
                <option value="{{ $elemento->simbolo }}"
                    @if ($elemento->simbolo == old('elemento_2', $formula->elemento_2)) selected @endif >
                {{ $elemento->simbolo }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <span id="span3" class="me-4 mt-1">+</span>
            <select id="elemento_3" name="elemento_3" class="form-select mb-3" aria-label="Selección de tipo">
                <option value=" " active></option>
                @foreach($elementosCompost as $elemento)
                <option value="{{ $elemento->simbolo }}"
                    @if ($elemento->simbolo == old('elemento_3', $formula->elemento_3)) selected @endif >
                {{ $elemento->simbolo }}</option>
                @endforeach
            </select>
        </div>
</div>


