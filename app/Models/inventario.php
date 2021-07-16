<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','stock','fecha_ingreso_producto','fecha_egreso_producto','categoria'];
}
