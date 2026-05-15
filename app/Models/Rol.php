<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Agregada
use Illuminate\Database\Eloquent\SoftDeletes;



class Rol extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'roles'; 

    protected $fillable = [ // columnas permitidas para asignación masiva
    ];

    //Relación: un Rol tiene muchos Usuarios → se usa como $rol->usuarios
 public function usuarios() {
 return $this->hasMany(Usuario::class, 'rol_id');
}
}
