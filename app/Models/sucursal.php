<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'id',
    'sigla_sucursal',
    'nombre_sucursal',
    'direccion'
    ];
}
