<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(MonedaSeeder::class);
        $this->call(TipoComprobanteSeeder::class);
        $this->call(UbigeoSeeder::class);
        $this->call(MedioPagoSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(UsuarioPerfilSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
