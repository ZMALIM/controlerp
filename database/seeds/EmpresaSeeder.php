<?php

use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            "idubigeo" => 1,
            "razon_social" => "CONTROLERP S.A.C",
            "nombre_comercial" => "CONTROLERP S.A.C",
            "representante" => "CONTROLERP REPRESENTANTE",
            "ruc" => "12345678789",
            "usuario_sol" => "CONTROLERP",
            "clave_sol" => "miclave",
            "direccion" => "AV. PRUEBA URB. PRUEBA",
            "urbanizacion" => "PRUEBA",
            "telefonos" => "987654123",
            "actividad" => "VENTA",
            "email" => "CONTROLERP@GMAIL.COM"
        ]);
    }
}
