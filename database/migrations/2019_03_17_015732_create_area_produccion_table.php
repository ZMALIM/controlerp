<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaProduccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_produccion', function (Blueprint $table) {
            $table->increments('idarea_produccion');
            $table->integer('idimpresora')->unsigned();
            $table->string('area_produccion', 80)->default('');
            $table->char('produccion', 2)->default('SI')->comment('SI, NO');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idimpresora')->references('idimpresora')->on('impresora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_produccion');
    }
}
