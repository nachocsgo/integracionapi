<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bodeguero extends Model
{
    protected $fillable = [
    'id',
    'run',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'genero'
    ];
}
