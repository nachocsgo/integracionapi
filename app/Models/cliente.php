<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'id',
    'numero_cliente',
    'run',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'direccion',
    'telefono',
    'fecha_nacimiento',
    'genero'
    ];


}
