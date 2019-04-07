<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimiento', function (Blueprint $table) {
            $table->increments('idestablecimiento');
            $table->integer('idempresa')->unsigned();
            $table->string('establecimiento', 80)->default('');
            $table->string('direccion', 200)->default('');
            $table->integer('orden')->default(0);
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idempresa')->references('idempresa')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimiento');
    }
}
