<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model

    /**
    Modelos y sus atributos que deben ser llenados
     */


{
    use HasFactory;

    protected $fillable = ["cedula", "nombre","apellidos", "telefono", "direccion"];

    protected $primaryKey = "cedula";
}
