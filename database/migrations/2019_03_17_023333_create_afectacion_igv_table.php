<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfectacionIgvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afectacion_igv', function (Blueprint $table) {
            $table->integer('idafectacion_igv')->comment('Igual a Codigo según SUNAT');
            $table->string('descripcion', 50)->default('');
            $table->char('afectacion_igv', 6)->default('');
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->primary('idafectacion_igv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afectacion_igv');
    }
}
