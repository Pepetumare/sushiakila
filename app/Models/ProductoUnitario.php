<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoUnitario extends Model
{
    use HasFactory;
    protected $table = "productos_unitarios";

    protected $fillable = ['nombre', 'tipo', 'precio', 'imagen'];
}
