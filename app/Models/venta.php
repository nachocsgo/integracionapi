<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'id',
    'codigo_venta',
    'fecha_emision',
    'tipo_venta'
    ];
}