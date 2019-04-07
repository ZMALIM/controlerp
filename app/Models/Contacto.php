<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    protected $table = 'contacto';
    protected $primaryKey = "idcontacto";

    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'idpersonal');
    }
}
