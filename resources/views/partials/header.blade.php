<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top transition" id="mainNavbar">
    <div class="container">
        <!-- Logo o nombre -->
        <a class="navbar-brand fw-bold text-warning d-flex align-items-center" href="{{ url('/') }}">
            <img id="navbarLogo" src="{{ asset('img/logo/logo-light-transparent.png') }}" alt="Sushi Akila"
                style="height: 40px;"
                onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '🍣 Sushi Akila');">
        </a>


        <!-- Botón responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sushiNavbar"
            aria-controls="sushiNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Enlaces -->
        <div class="collapse navbar-collapse" id="sushiNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="/">Inicio</a>
                </li>
                <li>
                    <a class="nav-link {{request()->is('menu') ? 'active' : ''}}" href="{{ route('menu') }}">Menú</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{request()->is('make_sushi') ? 'active' : ''}}" href="{{ route('make_sushi') }}">Arma tu Sushi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('locales') ? 'active' : ''}}" href="{{ route('locales') }}">Nuestros locales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('contacto') ? 'active' : ''}}" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
