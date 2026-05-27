<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rol'; 

    // Permitimos la asignación masiva del nombre y la descripción
    protected $fillable = ['nombre', 'descripcion'];

    // Relación corregida apuntando a User y con la columna correcta
    public function usuarios() 
    {
        return $this->hasMany(User::class, 'rol');
    }
}