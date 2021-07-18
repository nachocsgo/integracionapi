<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'id',
    'nombre_cliente',
    'nombre_producto',
    'codigo_venta',
    'fecha_emision',
    'tipo_venta',
    'total_venta',
    'cantidad',
    'estado'
    ];
}
