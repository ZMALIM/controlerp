<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'messages';
    protected $primaryKey = "id";
    protected $fillable = ['message'];

    public function usuario()
    {
      return $this->belongsTo('App\Models\Usuario','user_id');
    }
}
