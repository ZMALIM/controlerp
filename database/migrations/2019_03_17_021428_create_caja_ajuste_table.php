<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaAjusteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja_ajuste', function (Blueprint $table) {
            $table->increments('idcaja_ajuste');
            $table->integer('idcaja')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->integer('idmoneda')->unsigned();
            $table->dateTime('fecha')->default(now());
            $table->decimal('monto', 10, 2)->default(0);
            $table->char('efecto', 10)->default('')->comment('Entrada, Salida');
            $table->string('detalle', 200)->default('');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idcaja')->references('idcaja')->on('caja');
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
        Schema::dropIfExists('caja_ajuste');
    }
}
