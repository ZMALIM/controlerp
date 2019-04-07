<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_detalle', function (Blueprint $table) {
            $table->increments('idinventario_detalle');
            $table->integer('idiventario')->unsigned();
            $table->integer('idinsumo')->unsigned();
            $table->integer('idmoneda')->unsigned();
            $table->decimal('cantidad', 10, 2)->default(0);
            $table->decimal('precio_compra', 10, 2)->default(0);
            $table->decimal('valorizado', 10, 2)->default(0);
            $table->string('observaciones', 255)->default('');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idiventario')->references('idiventario')->on('inventario');
            $table->foreign('idinsumo')->references('idinsumo')->on('insumo');
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
        Schema::dropIfExists('inventario_detalle');
    }
}
