<?php

use Illuminate\Database\Seeder;
use App\Empleado_empresa;

class Empleado_empresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Empleado_empresa::class,10)->create();
    }
}
