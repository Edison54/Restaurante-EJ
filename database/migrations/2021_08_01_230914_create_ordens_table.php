<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /**
    Migraciones de tabla de ordenes o factura
     */

    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id("ID");
            $table->foreignId("ordenClienteCedula")->references("cedula")->on("clientes");
            $table->foreignId("comidaOrdenadaID")->references("ID")->on("comidas");
            $table->foreignId("userOrdenID")->references("id")->on("users");
            $table->string("detalleOrden");

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
        Schema::dropIfExists('ordens');
    }
}
