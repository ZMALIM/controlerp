<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';
    protected $primaryKey = "idpersonal";

    public function contacto()
    {
        return $this->hasOne('App\Models\Contacto', 'idcontacto');
    }

    public function Usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'idusuario');

    }
}
