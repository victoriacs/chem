<nav id="sidebar">
    <div class="sidebar-content">
    <div class="sidebar-header">
        <h3><a href="{{ route('home') }}">
            {{ config('app.name') }}
        </a></h3>
    </div>
    <ul class="list-unstyled list components mb-auto">
        <li class={{ setActive('home') }}>
            <a href="{{ route('home') }}">Inicio</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle {{ setActive('elementos.*') }}">Elementos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li class="{{ setActive('elementos.lista') }}">
                    <a class="d-none d-lg-block" href="{{ route('elementos.tabla') }}">Tabla periódica</a>
                </li>
                <li class="{{ setActive('elementos.tabla') }}">
                    <a href="{{ route('elementos.lista') }}">Listado</a>
                </li>
            </ul>
        </li>
        <li class="{{ setActive('formulas.index') }}">
            <a href="{{ route('formulas.index') }}">Fórmulas</a>
        </li>
    </ul>

    <div id="account">
    <hr>
        @guest
    <ul class="list-unstyled CTAs">
        <li>
            <a href="{{ route('login') }}" class="btn-login">Iniciar sesión</a>
        </li>
    </ul>
    @else
    <img class="image rounded-circle" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="profile_image" width="120" height="120">
    <div class="dropdown">
        <a href="#" style="text-align: center;" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <strong> {{ Auth::user()->user }} </strong>
        </a>
        <ul class="ms-5 p-3 dropdown-menu dropdown-account dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item " href="#">Nueva fórmula...</a></li>
          <li><a class="dropdown-item" href="#">Mis fórmulas</a></li>
          <li><a class="dropdown-item" href="{{ route('conf.cuenta') }}">Configuración</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a id="logout" class="dropdown-item" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
      </div>
      @endguest
    </div>
    </div>
</nav>
<div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fas fa-align-left"></i>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Elementos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fórmulas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>