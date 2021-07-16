<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    protected $fillable = [
    'id',
    'sigla_region',
    'nombre_region'
    ];
}
