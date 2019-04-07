<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica', function (Blueprint $table) {
            $table->string('caracteristica', 50);
            $table->string('descripcion', 50)->default('');
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->primary('caracteristica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristica');
    }
}
