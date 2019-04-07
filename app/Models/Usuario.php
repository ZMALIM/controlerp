<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = "usuario";
    protected $primaryKey = "idusuario";

    protected $fillable = [
        'idperfil',
        'usuario',
        'password',
        'estado',
        'sesion'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function personal(){
        return $this->hasOne('App\Models\Personal','idpersonal');
    }

    public function mensajes(){
        return $this->hasMany('App\Models\Mensaje','user_id');
    }
}
