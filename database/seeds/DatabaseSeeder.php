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
        $this->call(CiudadTableSeeder::class);
        $this->call(SedesTableSeeder::class);
        $this->call(EntidadTableSeeder::class);
        $this->call(ConfiguracionTableSeeder::class);
        // $this->call(EmpresasTableSeeder::class);
        // $this->call(ClientesTableSeeder::class);
        // $this->call(Empleado_empresaSeeder::class);
        // $this->call(PermisosTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(Role_userTableSeeder::class);
        //$this->call(PagosTableSeeder::class);
    }
}
