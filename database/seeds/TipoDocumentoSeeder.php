<?php
use Illuminate\Database\Seeder;
use App\Models\Tipo_documento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Datos fijos para la tabla Tipo documento
     *
     * @return void
     */
    public function run()
    {
      Tipo_documento::create([
        "idtipo_documento" => "0",
        "descripcion" => "DOC.TRIB.NO.DOM.SIN.RUC",
        "abreviatura" => "DOC.TRIB.NO.DOM.SIN.RUC",
        "longitud" => "0",
      ]);
      Tipo_documento::create([
        "idtipo_documento" => "1",
        "descripcion" => "DOC. NACIONAL DE IDENTIDAD",
        "abreviatura" => "DNI",
        "longitud" => "8",
      ]);
      Tipo_documento::create([
        "idtipo_documento" => "4",
        "descripcion" => "CARNET DE EXTRANJERIA",
        "abreviatura" => "CARNET DE EXTRANJERIA",
        "longitud" => "0",
      ]);
      Tipo_documento::create([
        "idtipo_documento" => "6",
        "descripcion" => "REG. UNICO DE CONTRIBUYENTES",
        "abreviatura" => "RUC",
        "longitud" => "11",
      ]);
      Tipo_documento::create([
        "idtipo_documento" => "7",
        "descripcion" => "PASAPORTE",
        "abreviatura" => "PASAPORTE",
        "longitud" => "0",
      ]);
      Tipo_documento::create([
        "idtipo_documento" => "A",
        "descripcion" => "CED. DIPLOMATICA DE IDENTIDAD",
        "abreviatura" => "CED. DIPLOMATICA DE IDENTIDAD",
        "longitud" => "0",
      ]);
    }
}
