<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjusteStockConceptoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajuste_stock_concepto', function (Blueprint $table) {
            $table->increments('idajuste_stock_concepto');
            $table->string('concepto', 50)->default('');
            $table->char('efecto', 10)->default('')->comment('Entrada, Salida');
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->integer('orden')->default(0);
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
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
        Schema::dropIfExists('ajuste_stock_concepto');
    }
}
