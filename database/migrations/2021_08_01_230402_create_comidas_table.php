<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /**
    Migraciones de tabla comidas
     */

    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            $table->id("ID");
            $table->string("nombre");
            $table->string("descripcion");
            $table->integer("precio");
            $table->string("ingredientes");
            $table->string("imagen");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comidas');
    }
}
