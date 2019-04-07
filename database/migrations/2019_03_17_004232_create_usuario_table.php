<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('idusuario');
            $table->integer('idpersonal')->unsigned();
            $table->integer('idperfil')->unsigned();
            $table->char('usuario', 20)->default('')->unique();
            $table->string('password', 200)->default('');
            $table->char('estado', 10)->default('Activo')->comment('Activo, Inactivo');
            $table->char('sesion', 11)->default('Cerrado')->comment('Iniciado, Cerrado');
            $table->rememberToken();
            $table->integer('idusario_registro')->default(0);
            $table->integer('idusuario_modificado')->default(0);
            $table->timestamps();
            $table->foreign('idpersonal')->references('idpersonal')->on('personal');
            $table->foreign('idperfil')->references('idperfil')->on('usuario_perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
