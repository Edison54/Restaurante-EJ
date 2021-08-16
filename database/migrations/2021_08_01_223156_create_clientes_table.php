<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    Migraciones de tabla clientes
     */




    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id("cedula");
            $table->string("nombre");
            $table->string("apellidos");
            $table->string("telefono");
            $table->string("direccion");
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
        Schema::dropIfExists('clientes');
    }
}
