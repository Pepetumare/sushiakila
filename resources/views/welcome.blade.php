<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/logo/logo-favicon.png') }}">
    <title>Sushi Akila - El mejor sushi de Mariquina y Alrededores</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .carousel-inner img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 1rem;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .carousel-caption {
                font-size: 0.9rem;
                padding: 0.5rem;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 15%;
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                width: 30px;
                height: 30px;
            }
        }
    </style>
</head>

<body>
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
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Arma tu Sushi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestros locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel slide col-md-12" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://phantom-elmundo.unidadeditorial.es/72d699df45e18b776c29e09b2173aa00/crop/497x106/2955x1745/resize/1220/f/webp/assets/multimedia/imagenes/2024/06/17/17186166965831.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-gradient position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="carousel-caption">
                    <h5>Prueba nuestras promos</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda non perferendis ullam,
                        aliquid autem commodi soluta facere culpa vel voluptates, alias dolores dolor delectus obcaecati
                        officiis numquam iusto nostrum voluptatum!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://sabordelobueno.com/wp-content/uploads/2017/08/7-tipos-sushi-probar.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-gradient position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="carousel-caption">
                    <h5>El mejor sushi de Mariquina</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda non perferendis ullam,
                        aliquid autem commodi soluta facere culpa vel voluptates, alias dolores dolor delectus obcaecati
                        officiis numquam iusto nostrum voluptatum!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://s1.ppllstatics.com/diariovasco/www/multimedia/2024/06/25/sushimixweb_20240625173724-RgPcJxWFnQeLRxxKawtr7AJ-1200x840@Diario%20Vasco.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-gradient position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="carousel-caption">
                    <h5>Arma tu PEDIDO</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda non perferendis ullam,
                        aliquid autem commodi soluta facere culpa vel voluptates, alias dolores dolor delectus obcaecati
                        officiis numquam iusto nostrum voluptatum!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>



</body>

</html>
