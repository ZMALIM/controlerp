<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->char('unidad_medida', 20);
            $table->string('caracteristica', 50);
            $table->char('marca', 50);
            $table->string('nombre_formal', 250)->default('');
            $table->string('descripcion_larga', 2000)->default('');
            $table->decimal('valor_compra', 10, 2)->default(0);
            $table->decimal('precio_compra', 10,2)->default(0);
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->string('codigo_barras', 100)->default('');
            $table->decimal('stock', 10, 2)->default(0);
            $table->decimal('peso', 10, 2)->default(0);
            $table->string('imagen', 200)->default('');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('unidad_medida')->references('unidad_medida')->on('unidad_medida')->onUpdate('cascade');
            $table->foreign('caracteristica')->references('caracteristica')->on('caracteristica')->onUpdate('cascade');
            $table->foreign('marca')->references('marca')->on('marca')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
