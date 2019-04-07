<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieComprobanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie_comprobante', function (Blueprint $table) {
            $table->increments('idserie_comprobante');
            $table->integer('idtipo_comprobante')->unsigned();
            $table->char('serie', 4)->default('');
            $table->char('cpe', 2)->default('NO')->comment('CPE=Serie de Comprobante Electronico | SI/NO');
            $table->integer('numero_lineas')->default(0);
            $table->string('fuente', 20)->default('');
            $table->integer('orden')->default(0);
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idtipo_comprobante')->references('idtipo_comprobante')->on('tipo_comprobante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serie_comprobante');
    }
}
