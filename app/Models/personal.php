<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    protected $fillable = [
    'id',
    'run',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'fecha_nacimiento',
    'genero'
    ];
}
