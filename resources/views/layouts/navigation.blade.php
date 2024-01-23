<nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Primary Navigation Menu -->
    <div class="container">
        <div class="d-lg-flex justify-content-between align-items-center flex-column flex-md-row">
            <!-- Logo -->
            <div class="navbar-brand mb-3 mb-md-0">
                <img src="https://i.ibb.co/W2Pmn2H/logomotomami.png" alt="Logo">
            </div>

            <!-- Navigation Links -->
            <div class="navbar-nav">
                <ul class="navbar-nav md-12 ">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('/motos') }}">Motos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('/estilos') }}">Estilos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('/clientes') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('/pedidos') }}">Pedidos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('reportePorCliente') }}">Reportes por clientes</a></li>
                            <li><a class="dropdown-item" href="{{ route('reportePorFecha') }}">Reportes por fechas</a></li>
                        </ul>
                    </li>
                    {{-- Verifica si el usuario tiene el rol 'admin' --}}
                    @if(auth()->check() && auth()->user()->rol == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('/users') }}">Administrar empleados</a>
                    </li>
                    @endif
                </ul>
            </div>
            
            <!-- Settings Dropdown -->
            
        </div>
        <div class="ml-auto order-md-last">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-light">
                    {{ __('Cerrar sesión') }}
                </button>
            </form>
        </div>
    </div>
</nav>
