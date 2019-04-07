<?php

use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacto::create([
            "idtipo_documento" => "1",
            "razon_social" => "PUBLICO EN GENERAL",
            "nombre_comercial" => "PUBLICO EN GENERAL",
            "tipo" => "PERSONA NATURAL",
            "nro_documento" => "12345678",
            "direccion" => "AV. PRUEBA S/N",
            "telf_fijo" => "98745214",
            "telf_movil" => "98569856",
            "email" => "PUBLICOGENERAL@CONTROLERP.COM",
            "observaciones" => ""
        ]);
    }
}
