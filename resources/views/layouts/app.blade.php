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
    @include('partials.header')

    <main class="py-1">
        @yield('content')
    </main>
    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://kit.fontawesome.com/29ee9b9319.js" crossorigin="anonymous"></script>

    @include('partials.footer')
</body>

</html>
