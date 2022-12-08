<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid shadow pb-2">
      <a class="navbar-brand" href="{{ route('empleados.index') }}">Gestión de Empleados</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </form>
        </ul>
      </div>
    </div>
  </nav>
