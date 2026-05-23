<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
 use HasFactory, SoftDeletes;
 protected $table = 'productos';
 
 // Cambiamos 'categoria' por 'categoria_id'
    protected $fillable = ['nombre', 'descripcion', 'precio', 'categoria_id', 'imagen', 'stock'];

    // Relación: Un producto pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

}

