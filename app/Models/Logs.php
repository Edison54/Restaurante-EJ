<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model

    /**
    Modelos y sus atributos que deben ser llenados
     */


{
    use HasFactory;

    protected $fillable = ["ID", "fecha","hora","accionRealizada"];

    protected $primaryKey = "ID";

}
