<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boleta extends Model
{
    protected $fillable = [
    'id',
    'run',
    'numero_boleta',
    'fecha_boleta',
    'total',
    'sub_total',
    'iva'
    ];
}
