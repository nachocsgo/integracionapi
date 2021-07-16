<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'id',
    'codigo',
    'nombre_producto',
    'marca',
    'modelo',
    'color',
    'precio'
    ];
}
