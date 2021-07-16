<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comuna extends Model
{
    protected $fillable = [
    'id',
    'sigla_comuna',
    'nombre_comuna'
    ];
}
