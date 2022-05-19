<div class="card-body">
    <form>
        <h2>Metales</h2>
        @foreach ($seriesMetales as $item)
        <label class="form-check ps-5">
            <input name="series[]" class="form-check-input" type="checkbox"
                   value="{{ $item->serie_id }}">
            <span class="form-check-label">
                {{ $item->nombre }}
            </span>
        </label>
        @endforeach
        <h2>Otros</h2>
        @foreach ($seriesOtros as $item)
        <label class="form-check ps-5">
            <input name="series[]" class="form-check-input" type="checkbox"
                   value="{{ $item->serie_id }}">
            <span class="form-check-label">
                {{ $item->nombre }}
            </span>
        </label>
        @endforeach
        <h2>No metal</h2>
        @foreach ($seriesNoMetales as $item)
        <label class="form-check ps-5">
            <input name="series[]" class="form-check-input" type="checkbox"
                   value="{{ $item->serie_id }}">
            <span class="form-check-label">
                {{ $item->nombre }}
            </span>
        </label>
        @endforeach
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary">Aplicar filtros</button>
        </div>
    </form>

</div> <!-- card-body.// -->
