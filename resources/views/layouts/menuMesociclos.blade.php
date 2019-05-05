<body>
  <div class="card text-center">
    <div class="card-header">
      <nav class="navbar navbar navbar-static-top custom-navbar" role="navigation">
          <div class="navbar-collapse collapse" id="navbar-collapse-1">
            <!-- Non-collapsing right-side icons -->
            <ul class="nav nav-tabs card-header-tabs  nav navbar-nav">
              <li class="nav-item {{ request()->is('mesociclos') ? 'active' : '' }}">
                <a style="color:#b50045;" class="nav-link" href="{{ route('mesociclos') }}">Mesociclos</a>
              </li>
              <li class="nav-item {{ request()->is('entrenamientos') ? 'active' : '' }}">
                <a style="color:#b50045;" class="nav-link" href="{{ route('entrenamientos') }}">Entrenamientos</a>
              </li>
              <li class="nav-item {{ request()->is('datosPersonales') ? 'active' : '' }}">
                <a style="color:#b50045;" class="nav-link" href="{{ route('datosPersonales') }}">Datos personales</a>
              </li>
              <li class="nav-item {{ request()->is('alineacion') ? 'active' : '' }}">
                <a style="color:#b50045;" class="nav-link" href="{{ route('alineacion') }}">Alineación</a>
              </li>
            </ul>
          </div>
        </div>
        <!--/.container -->
      </nav>
    </div>
  </div>
  @yield('content')
</body>