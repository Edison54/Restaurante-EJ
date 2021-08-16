<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model

    /**
    Modelos y sus atributos que deben ser llenados
     */

{
    use HasFactory;


    protected $fillable = ["ID", "ordenClienteCedula","comidaOrdenadaID","userOrdenID","detalleOrden"];

    protected $primaryKey = "ID";

}
