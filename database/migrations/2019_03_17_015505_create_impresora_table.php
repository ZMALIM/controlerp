<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpresoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresora', function (Blueprint $table) {
            $table->increments('idimpresora');
            $table->string('impresora', 100)->default('');
            $table->string('impresora_serie', 100)->default('');
            $table->char('direccion_ip', 20)->default('');
            $table->char('principal', 2)->default('NO')->comment('SI, NO');
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
        Schema::dropIfExists('impresora');
    }
}
