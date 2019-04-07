<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('idempresa');
            $table->integer('idubigeo')->unsigned();
            $table->string('razon_social', 200)->default('');
            $table->string('nombre_comercial', 200)->default('');
            $table->string('representante', 250)->default('');
            $table->char('ruc', 11)->default('')->unique();
            $table->string('usuario_sol', 50)->default('')->unique();
            $table->string('clave_sol', 150)->default('')->unique();
            $table->char('arigv', 2)->default('NO')->comment('Agente Retencion IGV | SI/NO');
            $table->char('apvi', 2)->default('NO')->comment('Agente Percepcion Venta Interna | SI/NO');
            $table->char('apcl', 2)->default('NO')->comment('Agente Percepcion Combustible Liquido | SI/NO');
            $table->string('direccion', 100)->default('');
            $table->string('urbanizacion', 25)->default('');
            $table->string('telefonos', 30)->default('');
            $table->string('actividad', 255)->default('');
            $table->string('email', 80)->default('')->unique();
            $table->string('logo', 200)->default('');
            $table->timestamps();
            $table->foreign('idubigeo')->references('idubigeo')->on('ubigeo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
