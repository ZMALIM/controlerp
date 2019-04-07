<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('idiventario');
            $table->integer('idestablecimiento')->unsigned();
            $table->string('denominacion', 100)->default('');
            $table->dateTime('inicio_vigencia')->default(now());
            $table->char('estado', 20)->default('Vigente')->comment('Vigente, No Vigente');
            $table->string('observaciones', 250)->default('');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idestablecimiento')->references('idestablecimiento')->on('establecimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
}
