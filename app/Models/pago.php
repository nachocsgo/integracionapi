<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'id',
    'forma_pago',
    'numero_cuota',
    'numero_tarjeta'
    ];
}
