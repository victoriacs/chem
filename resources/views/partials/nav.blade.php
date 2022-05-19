    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
    
      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
  
        <div class="container">
          <div class="row align-items-center position-relative">
            
            <div class="col-6 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="{{ route('home') }}">{{ config('app.name') }}</a></h1>
            </div>
  
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
  
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li class={{ setActive('home') }}><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                  <li class="has-children">
                    <a class="nav-link">Elementos</a>
                    <ul class="dropdown">
                      <li class="d-none d-lg-block"><a href="{{ route('elementos.tabla') }}" class="nav-link">Tabla periódica</a></li>
                      <li><a href="{{ route('elementos.lista') }}" class="nav-link">Listado</a></li>
                    </ul>
                  </li>
                  <li class="{{ setActive('formulas.index') }}"><a href="{{ route('formulas.index') }}" class="nav-link">Fórmulas</a></li>
                  @guest
                  <li><a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a></li>
                  @else
                  <li class="has-user">
                      <a class="nav-link"><img class="image rounded-circle me-1" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="profile_image" width="35" height="35">
                        {{ Auth::user()->user }}</a>
                    <ul class="dropdown">
                      <li><a href="{{ route('perfil.index', Auth::user()->user) }}" class="nav-link">Mi perfil</a></li>
                      <li class="d-none d-lg-block"><a href="{{ route('perfil.formulas', Auth::user()->user) }}" class="nav-link">Mís fórmulas</a></li>
                      <li class="d-none d-lg-block"><a href="{{ route('perfil.fav', Auth::user()->user) }}" class="nav-link">Fórmulas favoritas</a></li>
                      <li class="d-none d-lg-block"><a href="{{ route('formulas.create') }}" class="nav-link">Crear fórmula</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a href="{{ route('conf.cuenta') }}" class="nav-link">Configuración</a></li>
                      <li><a href="#" class="nav-link"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>  
                  </ul>
                  </li>
                  @endguest
                </ul>
              </nav>
            </div>
  
  
            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
  
          </div>
        </div>
      </header>
      
      {{-- <div class="hero d-flex justify-content-between align-items-center"> --}}
      <div class="hero">
        @yield('content')
      </div>