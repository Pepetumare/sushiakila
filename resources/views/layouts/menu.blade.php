@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- Filtros -->
            {{-- <div class="col-md-3">
                <form method="GET" action="{{ route('menu') }}">
                    <div class="mb-3">
                        <label class="form-label">Categoría</label>
                        <select class="form-select" name="categoria">
                            <option value="">Todas</option>
                            @foreach ($categorias as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ request('categoria') == $cat->id ? 'selected' : '' }}>{{ $cat->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio mínimo</label>
                        <input type="number" name="precio_min" class="form-control" value="{{ request('precio_min') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio máximo</label>
                        <input type="number" name="precio_max" class="form-control" value="{{ request('precio_max') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
            </div> --}}
            <div class="row" id="productos">
                @foreach ($productos as $producto)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            @if ($producto->imagen)
                                <img src="{{ asset('img/' . $producto->imagen) }}" class="card-img-top img-carta"
                                    alt="{{ $producto->nombre }}">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text">{{ $producto->descripcion }}</p>
                                <p class="card-text fw-bold">${{ $producto->precio }}</p>
                                <button class="btn btn-success mt-auto agregar-carrito" data-id="{{ $producto->id }}"
                                    data-nombre="{{ $producto->nombre }}" data-precio="{{ $producto->precio }}">
                                    <i class="fa-solid fa-cart-shopping"></i> Agregar
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr>

            <h3>Carrito de Compras</h3>
            <ul id="carrito" class="list-group mb-4"></ul>
            <h4 id="total">Total: $0</h4>
            <button id="vaciar-carrito" class="btn btn-danger">Vaciar Carrito</button>
            <button id="pagar-carrito" class="btn btn-success">Pagar</button>
        </div>
        <div class="d-flex justify-content-center">
            {{ $productos->links() }}
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const carritoElemento = document.getElementById('carrito');
            const totalElemento = document.getElementById('total');
            const vaciarCarritoBtn = document.getElementById('vaciar-carrito');
            const pagarCarritoBtn = document.getElementById('pagar-carrito');

            document.querySelectorAll('.agregar-carrito').forEach(boton => {
                boton.addEventListener('click', () => {
                    const id = boton.getAttribute('data-id');
                    const nombre = boton.getAttribute('data-nombre');
                    const precio = parseFloat(boton.getAttribute('data-precio'));

                    const productoExistente = carrito.find(p => p.id === id);

                    if (productoExistente) {
                        productoExistente.cantidad++;
                    } else {
                        carrito.push({
                            id,
                            nombre,
                            precio,
                            cantidad: 1
                        });
                    }

                    guardarCarrito();
                    actualizarCarrito();
                });
            });

            vaciarCarritoBtn.addEventListener('click', () => {
                if (confirm('¿Seguro que quieres vaciar el carrito?')) {
                    carrito.length = 0;
                    guardarCarrito();
                    actualizarCarrito();
                }
            });

            pagarCarritoBtn.addEventListener('click', () => {
                if (carrito.length === 0) {
                    alert('El carrito está vacío.');
                    return;
                }
                if (confirm('¿Deseas finalizar la compra?')) {
                    // Aquí podrías hacer un proceso real de compra en el futuro
                    alert('¡Gracias por tu compra!');
                    carrito.length = 0;
                    guardarCarrito();
                    actualizarCarrito();
                }
            });

            function actualizarCarrito() {
                carritoElemento.innerHTML = '';
                let total = 0;

                carrito.forEach(producto => {
                    const li = document.createElement('li');
                    li.className = 'list-group-item d-flex justify-content-between align-items-center';
                    li.innerHTML =
                        `${producto.nombre} (x${producto.cantidad}) <span>$${(producto.precio * producto.cantidad).toFixed(2)}</span>`;
                    carritoElemento.appendChild(li);

                    total += producto.precio * producto.cantidad;
                });

                totalElemento.textContent = `Total: $${total.toFixed(2)}`;
            }

            function guardarCarrito() {
                localStorage.setItem('carrito', JSON.stringify(carrito));
            }

            // Mostrar el carrito al cargar
            actualizarCarrito();
        });
    </script>


@endsection
