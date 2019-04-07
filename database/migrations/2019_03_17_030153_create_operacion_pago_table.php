<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacion_pago', function (Blueprint $table) {
            $table->increments('idoperacion_pago');
            $table->integer('idoperacion')->unsigned();
            $table->integer('idmoneda')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->string('medio_pago', 40);
            $table->dateTime('fecha_pago')->default(now());
            $table->decimal('monto', 10, 2)->default(0);
            $table->decimal('tipo_cambio', 10, 2)->default(0);
            $table->string('observaciones', 255)->default('');
            $table->char('estado', 10)->default('VALIDO')->comment('Valido, Anulado');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idoperacion')->references('idoperacion')->on('operacion');
            $table->foreign('idmoneda')->references('idmoneda')->on('moneda');
            $table->foreign('idusuario')->references('idusuario')->on('usuario');
            $table->foreign('medio_pago')->references('medio_pago')->on('medio_pago')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacion_pago');
    }
}
