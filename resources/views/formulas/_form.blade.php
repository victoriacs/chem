<script defer src="{{ asset('js/formulas.js') }}"></script>

@csrf
<label for="nombre_comun" class="form-label">NOMBRE COMÚN</label>
<input type="text" class="form-control" name="nombre_comun" value={{ old('nombre_comun', $formula->nombre_comun) }}>
<br>
<label for="descripcion" class="form-label">DESCRIPCIÓN</label>
<textarea class="form-control" name="descripcion" id="descripcion">{{ old('descripcion', $formula->descripcion) }}</textarea>
<br>
<label for="nombre_sistematico" class="form-label">NOMBRE SISTEMÁTICO</label>
<input type="text" class="form-control" name="nombre_sistematico"  value={{ old('nombre_sistematico', $formula->nombre_sistematico) }}>
<br>
<label for="tipo" class="form-label">TIPO</label>
<select id="tipo" name="tipo" class="form-select mb-3" aria-label="Selecció de tipo">
    <option active></option>
    @foreach($categorias as $id => $name)
    <option value="{{ $id }}"
        @if ($id == old('tipo',$formula->tipo)) selected @endif >
    {{ $name }}</option>
    @endforeach
</select>
<label class="form-label">FÓRMULA</label>
    <div class="row d-flex align-items-center">
        <div class="col-4">
            <select id="elemento_1" name="elemento_1" class="form-select mb-3" aria-label="Selección de tipo">
                <option value=" " active></option>
                @foreach($elementos as $elemento)
                <option value="{{ $elemento->simbolo }}"
                    @if ($elemento->simbolo == old('elemento_1', $formula->elemento_1)) selected @endif>
                {{ $elemento->simbolo }}</option>
                @endforeach
            </select>
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


