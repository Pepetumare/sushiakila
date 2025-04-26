@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

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
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <!-- Fin de carrusel de imagenes -->

    <div class="container text-center my-5">
        <h1 class="display-5">Los Favoritos</h2>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.cocinista.es/download/bancorecursos/recetas/receta-california-maki-rollito.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Texto de ejemplo 1</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.cocinista.es/download/bancorecursos/recetas/receta-california-maki-rollito.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Texto de ejemplo 2</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.cocinista.es/download/bancorecursos/recetas/receta-california-maki-rollito.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Texto de ejemplo 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
