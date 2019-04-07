<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoOperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_operacion', function (Blueprint $table) {
            $table->increments('idtipo_operacion');
            $table->string('operacion', 50)->default('');
            $table->char('abreviatura', 10)->default('');
            $table->char('fuente', 10)->default('')->comment('Interno, Externo');
            $table->char('efecto_dinero', 10)->default('')->comment('Ingreso, Salida, Ninguno');
            $table->char('efecto_mercaderia', 10)->default('')->comment('Ingreso, Salida, Ninguno');
            $table->integer('orden')->default(0);
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
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
        Schema::dropIfExists('tipo_operacion');
    }
}
