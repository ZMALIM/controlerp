<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Ubigeo;

class UbigeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista_ubigeo = json_decode(File::get('database/data/ubigeo.json'), true);
        foreach ($lista_ubigeo["ubigeo"] as $ubigeo) {
            Ubigeo::create([
                "ubigeo" => $ubigeo["Ubigeo"],
                "departamento" => $ubigeo["Departamento"],
                "provincia" => $ubigeo["Provincia"],
                "distrito" => $ubigeo["Distrito"],
                "codigo_pais" => $ubigeo["CodigoPais"]
            ]);
        }
    }
}
