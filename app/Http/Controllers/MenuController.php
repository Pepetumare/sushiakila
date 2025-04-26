<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProductoModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $categorias = CategoriaModel::all();

        $query = ProductoModel::with('categoria');

        if ($request->filled('categoria')){
            $query->where('categoria_id', $request->categoria);
        }

        if ($request->filled('precio_min')) {
            $query->where('precio', '>=', $request->precio_min);
        }

        if ($request->filled('precio_max')) {
            $query->where('precio', '<=', $request->precio_max);
        }

        $productos = $query->paginate(12);

        return view('layouts.menu', compact('categorias', 'productos'));
    }
}
