<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manzana extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'tipoManzana',
        'precioKilo'
    ];
}
