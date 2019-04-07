<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta', function (Blueprint $table) {
            $table->increments('idreceta');
            $table->integer('idestablecimiento')->unsigned();
            $table->integer('idproducto')->unsigned();
            $table->integer('idinsumo')->unsigned();
            $table->decimal('cantidad', 10, 2)->default(0);
            $table->string('descripcion', 200)->default('');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idestablecimiento')->references('idestablecimiento')->on('establecimiento');
            $table->foreign('idproducto')->references('idproducto')->on('producto');
            $table->foreign('idinsumo')->references('idinsumo')->on('insumo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receta');
    }
}
