<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('idcontacto');
            $table->char('idtipo_documento', 2);
            $table->string('razon_social', 250)->default('')->comment('Extraer de SUNAT/RENIEC');
            $table->string('nombre_comercial', 250)->default('')->comment('Extraer de SUNAT/RENIEC');
            $table->string('tipo', 150)->default('')->comment('Extraer de SUNAT/RENIEC');
            $table->string('condicion', 150)->default('')->comment('Extraer de SUNAT/RENIEC');
            $table->char('nro_documento', 11)->default('')->unique();
            $table->string('direccion', 200)->default('')->comment('Extraer de SUNAT/RENIEC');
            $table->string('telf_fijo', 20)->default('');
            $table->string('telf_movil', 15)->default('');
            $table->string('email', 100)->default('')->unique();
            $table->string('observaciones', 250)->default('');
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->char('arigv', 2)->default('NO')->comment('Agente Retencion IGV | SI/NO');
            $table->char('apvi', 2)->default('NO')->comment('Agente Percepcion Venta Interna | SI/NO');
            $table->char('apcl', 2)->default('NO')->comment('Agente Percepcion Combustible Liquido | SI/NO');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idtipo_documento')->references('idtipo_documento')->on('tipo_documento')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
}
