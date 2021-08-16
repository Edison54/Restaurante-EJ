<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comidas extends Model

    /**
    Modelos y sus atributos que deben ser llenados
     */

{
    use HasFactory;

    protected $fillable = ["ID", "nombre","precio","descripcion","ingredientes","imagen"];

    protected $primaryKey = "ID";
}
