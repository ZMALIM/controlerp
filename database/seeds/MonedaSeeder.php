<?php

use Illuminate\Database\Seeder;
use App\Models\Moneda;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos para la tabla Moneda
        Moneda::create([
          "moneda" => "SOLES",
          "simbolo" => "S/",
          "tipo_cambio" => 1.00,
          "base" => 1,
          "iso" => "PEN"
        ]);
        Moneda::create([
          "moneda" => "DOLARES AMERICANOS",
          "simbolo" => "US$",
          "tipo_cambio" => 3.30,
          "base" => 0,
          "iso" => "USD"
        ]);
    }
}
