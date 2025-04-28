<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductoUnitario;

class ProductoUnitarioSeeder extends Seeder
{
    public function run()
    {
        $ingredientes = [
            ['nombre' => 'Arroz para sushi', 'tipo' => 'Base', 'precio' => 500],
            ['nombre' => 'Nori (alga)', 'tipo' => 'Base', 'precio' => 800],
            ['nombre' => 'Palta', 'tipo' => 'Relleno', 'precio' => 600],
            ['nombre' => 'Queso crema', 'tipo' => 'Relleno', 'precio' => 700],
            ['nombre' => 'Camarón tempura', 'tipo' => 'Relleno', 'precio' => 1200],
            ['nombre' => 'Salmón fresco', 'tipo' => 'Relleno', 'precio' => 1500],
            ['nombre' => 'Atún', 'tipo' => 'Relleno', 'precio' => 1400],
            ['nombre' => 'Pepino', 'tipo' => 'Relleno', 'precio' => 400],
            ['nombre' => 'Tobiko (huevas de pez volador)', 'tipo' => 'Topping', 'precio' => 1000],
            ['nombre' => 'Sésamo tostado', 'tipo' => 'Topping', 'precio' => 300],
            ['nombre' => 'Cebollín', 'tipo' => 'Topping', 'precio' => 400],
            ['nombre' => 'Mayonesa spicy', 'tipo' => 'Salsa', 'precio' => 500],
            ['nombre' => 'Teriyaki', 'tipo' => 'Salsa', 'precio' => 500],
            ['nombre' => 'Wasabi', 'tipo' => 'Salsa', 'precio' => 300],
            ['nombre' => 'Anguila (unagi)', 'tipo' => 'Relleno', 'precio' => 2000],
            ['nombre' => 'Tako (pulpo)', 'tipo' => 'Relleno', 'precio' => 1800],
            ['nombre' => 'Ikura (huevas de salmón)', 'tipo' => 'Topping', 'precio' => 2200],
            ['nombre' => 'Tartar de atún picante', 'tipo' => 'Relleno', 'precio' => 1600],
            ['nombre' => 'Mango', 'tipo' => 'Relleno', 'precio' => 700],
        ];

        foreach ($ingredientes as $ingrediente) {
            ProductoUnitario::create($ingrediente);
        }
    }
}

