<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Medio_pago;

class MedioPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista_MedioPago = json_decode(File::get('database/data/medio_pago.json'),true);
        foreach ($lista_MedioPago["medio_pago"] as $medioPago) {
            Medio_pago::create([
                "medio_pago" => $medioPago["MedioPago"],
                "orden" => $medioPago["Orden"],
                "estado" => $medioPago["Estado"]
            ]);
        }
    }
}
