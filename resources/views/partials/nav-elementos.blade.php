<div class="d-none d-lg-block">
    <div class="pt-2" style="background-color: white">
      <div class="col">
        <ul class="nav nav-tabs justify-content-center">
          <li class="nav-item">
              <a href="{{ route('elementos.tabla') }}" class="nav-link {{ request()->is('tabla-periodica') ? 'active' : '' }}" aria-current="page">
                  Tabla periódica
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('elementos.lista') }}" class="nav-link {{ request()->is('lista-elementos') ? 'active' : '' }}">
                  Lista
              </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
