<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso', function (Blueprint $table) {
            $table->increments('idrecurso');
            $table->integer('idtarifa')->unsigned();
            $table->integer('idproducto')->unsigned();
            $table->integer('idarea_produccion')->unsigned();
            $table->integer('idclasificacion')->unsigned();
            $table->integer('idmoneda')->unsigned();
            $table->decimal('tipo_cambio', 10, 2)->default(0);
            $table->decimal('precio', 10, 2)->default(0);
            $table->char('cortesia', 2)->default('NO')->comment('SI, NO');
            $table->integer('orden')->default(0);
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idtarifa')->references('idtarifa')->on('tarifa');
            $table->foreign('idproducto')->references('idproducto')->on('producto');
            $table->foreign('idarea_produccion')->references('idarea_produccion')->on('area_produccion');
            $table->foreign('idclasificacion')->references('idclasificacion')->on('clasificacion');
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
        Schema::dropIfExists('recurso');
    }
}
