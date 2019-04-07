<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario_perfil;

class UsuarioPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario_perfil::create([
            "perfil" => "Admin",
            "imagen" => "Admin.png"
        ]);
        Usuario_perfil::create([
            "perfil" => "Mozo",
            "imagen" => "Mozo.png"
        ]);
        Usuario_perfil::create([
            "perfil" => "Jefe Mozo",
            "imagen" => "JefeMozo.png"
        ]);
    }
}
