<?php

use Illuminate\Database\Seeder;
use App\Entidad;

class EntidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Entidad::class,20)->create();



    }
}
