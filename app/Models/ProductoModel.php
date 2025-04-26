<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    use HasFactory;
    protected $table = "productos";

    protected $fillable = ['nombre', 'descripcion', 'precio', 'imagen', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(CategoriaModel::class);
    }
}
