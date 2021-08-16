<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    Migraciones de tabla logs (No lo usamos :c)
     */

    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id("ID");
            $table->string("fecha");
            $table->string("hora");
            $table->string("accionRealizada");
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
        Schema::dropIfExists('logs');
    }
}
