<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota_credito extends Model
{
    public $timestamps = false;
    protected $fillable = [
    'id',
    'numero_nota_credito',
    'fecha_nota_credito'
    ];
}
