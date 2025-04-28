@extends('layouts.app')

@section('title', 'Personaliza tu Pedido!')

@section('content')

    <div class="container">
        <h1 class="mb-4">Arma tu Sushi 🍣</h1>
        <form id="form-sushi">
            <button type="submit" class="btn btn-success mt-3">¡Crear mi Sushi!</button>
            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="row g-0 align-items-center h-100">
                                <!-- Textos -->
                                <div class="col-7 p-3">
                                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                                    <p class="card-text mb-1">Tipo: {{ $producto->tipo }}</p>
                                    <p class="card-text mb-2">Precio: ${{ $producto->precio }}</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ingredientes[]"
                                            value="{{ $producto->id }}" id="ingrediente-{{ $producto->id }}">
                                        <label class="form-check-label" for="ingrediente-{{ $producto->id }}">
                                            Agregar
                                        </label>
                                    </div>
                                </div>

                                <!-- Imagen -->
                                <div class="col-5 h-100">
                                    @if ($producto->imagen)
                                        <img src="{{ asset('img/personaliza/' . $producto->imagen) }}"
                                            alt="{{ $producto->nombre }}"
                                            class="img-fluid rounded-end h-100 w-100 object-fit-cover">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </form>

    </div>

    <script>
        document.getElementById('form-sushi').addEventListener('submit', function(e) {
            e.preventDefault();
            const seleccionados = [...document.querySelectorAll('input[name="ingredientes[]"]:checked')]
                .map(input => input.value);

            if (seleccionados.length === 0) {
                alert('Por favor selecciona al menos un ingrediente.');
                return;
            }

            localStorage.setItem('sushiPersonalizado', JSON.stringify(seleccionados));
            alert('¡Sushi personalizado creado! Ahora procederás al pago.');

            // Podrías redirigir al checkout aquí:
            // window.location.href = '/checkout';
        });
    </script>

@endsection
