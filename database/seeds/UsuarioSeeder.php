<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            "idpersonal" => 1,
            "idperfil" => 1,
            "usuario" => "Admin",
            "password" => "123456"
        ]);

        Usuario::create([
            "idpersonal" => 2,
            "idperfil" => 1,
            "usuario" => "Admin_2",
            "password" => "123456"
        ]);
    }
}
