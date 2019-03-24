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
        $this->call(EntidadTableSeeder::class);
        $this->call(CiudadTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(Empleado_empresaSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(ConfiguracionTableSeeder::class);
        //$this->call(PagosTableSeeder::class);
        
    }
}
