<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('idconfiguracion');
            $table->integer('idempresa')->unsigned();
            $table->decimal('pje_impuesto_general', 10, 2)->default(0);
            $table->decimal('pje_percepcion', 10, 2)->default(0);
            $table->decimal('pje_percepcionAgentes', 10, 2)->default(0);
            $table->decimal('pje_impuestoRenta', 10, 2)->default(0);
            $table->integer('idmoneda')->unsigned();
            $table->string('certificado_ruta', 300)->default('');
            $table->string('certificado_usuario', 100)->default('');
            $table->string('certificado_clave', 100)->default('');
            $table->timestamps();
            $table->foreign('idempresa')->references('idempresa')->on('empresa');
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
        Schema::dropIfExists('configuracion');
    }
}
