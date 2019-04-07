<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumo', function (Blueprint $table) {
            $table->increments('idinsumo');
            $table->char('unidad_medida', 20);
            $table->integer('idsub_familia')->unsigned();
            $table->string('caracteristica', 50);
            $table->char('marca', 50);
            $table->integer('idmoneda')->unsigned();
            $table->string('insumo', 250)->default('');
            $table->string('descripcion_larga', 2000)->default();
            $table->decimal('valor_compra', 10, 2)->default(0);
            $table->decimal('precio_compra', 10, 2)->default(0);
            $table->decimal('valor_transporte', 10, 2)->default(0);
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->boolean('fraccionable')->default(0);
            $table->string('codigo_barras', 50)->default('');
            $table->decimal('stock', 10, 2)->default(0);
            $table->decimal('peso_neto', 10, 2)->default(0);
            $table->decimal('peso_contenedor', 10, 2)->default(0);
            $table->decimal('peso_bruto', 10, 2)->default(0);
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('unidad_medida')->references('unidad_medida')->on('unidad_medida')->onUpdate('cascade');
            $table->foreign('idsub_familia')->references('idsub_familia')->on('sub_familia');
            $table->foreign('caracteristica')->references('caracteristica')->on('caracteristica')->onUpdate('cascade');
            $table->foreign('marca')->references('marca')->on('marca')->onUpdate('cascade');
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
        Schema::dropIfExists('insumo');
    }
}
