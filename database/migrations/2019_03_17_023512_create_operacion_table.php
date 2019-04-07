<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacion', function (Blueprint $table) {
            $table->increments('idoperacion');
            $table->integer('idempresa')->unsigned();
            $table->integer('idestablecimiento')->unsigned();
            $table->integer('idcontacto')->unsigned();
            $table->integer('idtipo_comprobante')->unsigned();
            $table->integer('idserie_comprobante')->unsigned();
            $table->integer('idtipo_operacion')->unsigned();
            $table->integer('idmoneda')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->integer('idcaja')->unsigned();
            $table->integer('idmesa')->unsigned();
            $table->dateTime('fecha')->default(now());
            $table->string('referencia', 255)->default('');
            $table->integer('nro_comprobante')->default(0);
            $table->char('condicion', 8)->default('F')->comment('F=Formal| NF=No formal');
            $table->string('guia_remision', 255)->default('');
            $table->integer('comensales')->default(0);
            $table->char('pago', 20)->default('')->comment('Pendiente, Cancelado, Ninguno, Sobrepago');
            $table->dateTime('cancelacion')->default(now());
            $table->char('mercaderia', 20)->default('')->comment('Pendiente, Entregado, Ninguno');
            $table->dateTime('entrega')->default(now());
            $table->decimal('descuento', 10, 2)->default(0);
            $table->decimal('pje_descuento', 10, 2)->default(0);
            $table->decimal('ops_gratuitas', 10, 2)->default(0);
            $table->decimal('ops_exoneradas', 10, 2)->default(0);
            $table->decimal('ops_inafectas', 10, 2)->default(0);
            $table->decimal('ops_gravadas', 10, 2)->default(0);
            $table->decimal('total_descuento', 10, 2)->default(0);
            $table->decimal('otros_cargos', 10, 2)->default(0);
            $table->decimal('otros_tributos', 10, 2)->default(0);
            $table->decimal('isc', 10, 2)->default(0);
            $table->decimal('igv', 10, 2)->default(0);
            $table->decimal('importe', 10, 2)->default(0);
            $table->char('gratuito', 2)->default('NO')->comment('SI, NO');
            $table->decimal('pje_impuesto', 10, 2)->default(0);
            $table->boolean('exonerado')->default(0);
            $table->decimal('pje_percepcion', 10, 2)->default(0);
            $table->decimal('percepcion', 10, 2)->default(0);
            $table->decimal('tipo_cambio', 10, 2)->default(0);
            $table->string('nota', 500)->default('');
            $table->string('observaciones', 255)->default('');
            $table->char('estado', 15)->default('VALIDO')->comment('Valido, Anulado');
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idempresa')->references('idempresa')->on('empresa');
            $table->foreign('idestablecimiento')->references('idestablecimiento')->on('establecimiento');
            $table->foreign('idcontacto')->references('idcontacto')->on('contacto');
            $table->foreign('idtipo_comprobante')->references('idtipo_comprobante')->on('tipo_comprobante');
            $table->foreign('idserie_comprobante')->references('idserie_comprobante')->on('serie_comprobante');
            $table->foreign('idtipo_operacion')->references('idtipo_operacion')->on('tipo_operacion');
            $table->foreign('idmoneda')->references('idmoneda')->on('moneda');
            $table->foreign('idusuario')->references('idusuario')->on('usuario');
            $table->foreign('idcaja')->references('idcaja')->on('caja');
            $table->foreign('idmesa')->references('idmesa')->on('mesa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacion');
    }
}
