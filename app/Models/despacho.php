<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class despacho extends Model
{
    protected $fillable = [
    'id',
    'codigo_despacho',
    'fecha_ingreso',
    'fecha_retiro',
    'estado'
    ];
}
