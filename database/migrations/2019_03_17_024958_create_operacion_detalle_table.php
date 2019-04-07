<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacion_detalle', function (Blueprint $table) {
            $table->increments('idoperacion_detalle');
            $table->integer('idoperacion')->unsigned();
            $table->integer('idrecurso')->unsigned();
            $table->integer('idafectacion_igv');
            $table->char('idtipo_precio_unitario', 2)->default('01')->comment('Por defecto segun SUNAT 01');
            $table->integer('nro_item')->default(0);
            $table->decimal('cantidad', 10, 2)->default(0);
            $table->decimal('precio_unitario', 10, 2)->default(0);
            $table->decimal('pje_impuesto', 10, 2)->default(0);
            $table->decimal('igv', 10, 2)->default(0);
            $table->decimal('valor_venta', 10, 2)->default(0);
            $table->decimal('total', 10, 2)->default(0);
            $table->char('cortesia', 2)->default('NO')->comment('SI, NO');
            $table->char('medio_plato', 2)->default('NO')->comment('SI, NO');
            $table->char('estado', 20)->default('PENDIENTE')->comment('Pendiente, Producido, Anulado');
            $table->char('delimitar', 2)->default('NO')->comment('SI, NO');
            $table->string('comentario', 200)->default('');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idoperacion')->references('idoperacion')->on('operacion');
            $table->foreign('idrecurso')->references('idrecurso')->on('recurso');
            $table->foreign('idafectacion_igv')->references('idafectacion_igv')->on('afectacion_igv')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacion_detalle');
    }
}
