<nav class="menuPrincipal row d-flex navbar navbar-expand navbar-light bg-light">
    <div class="navbar-collapse collapse" id="navbar-collapse-1">
                    <!-- Non-collapsing right-side icons -->
        <ul class="nav nav-tabs card-header-tabs  nav navbar-nav">
            <li class="nav-item {{ request()->is('entrenamientos') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('entrenamientos') }}">Entrenamientos</a>
            </li>
            <li class="nav-item {{ request()->is('historial') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('historial') }}">Historial</a>
            </li>
            <li class="nav-item {{ request()->is('documentos') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('documentos') }}">Documentos</a>
            </li>
            <li class="nav-item {{ request()->is('competiciones') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('competiciones') }}">Competiciones</a>
            </li>   
        </ul>
    </div>
</nav>