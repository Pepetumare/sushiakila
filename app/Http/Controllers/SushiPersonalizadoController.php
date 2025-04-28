<?php

namespace App\Http\Controllers;

use App\Models\ProductoUnitario;
use Illuminate\Http\Request;

class SushiPersonalizadoController extends Controller
{
    public function index()
    {
        $productos = ProductoUnitario::all();
        return view('layouts.personaliza', compact('productos'));
    }
}
