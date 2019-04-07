<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja', function (Blueprint $table) {
            $table->increments('idcaja');
            $table->integer('idestablecimiento')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->integer('idmoneda')->unsigned();
            $table->dateTime('fecha_apertura')->default(now());
            $table->dateTime('fecha_cierre');
            $table->decimal('monto', 10, 2)->default(0);
            $table->char('estado', 10)->default('INICIADA')->comment('Iniciada, Finalizada');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idestablecimiento')->references('idestablecimiento')->on('establecimiento');
            $table->foreign('idusuario')->references('idusuario')->on('usuario');
            $table->foreign('idmoneda')->references('idmoneda')->on('moneda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caja');
    }
}
