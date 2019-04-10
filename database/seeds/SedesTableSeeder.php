<?php

use Illuminate\Database\Seeder;
use App\Sede;

class SedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sede::create([

            'nombre'    => 'PALMRA - CENTRO',
            'id_ciudad'    => '1',
            'telefono'    => 2872547,
            'direccion'    => 'Carrera 31 no 29 – 42',
        ]);
        Sede::create([

            'nombre'    => 'PALMIRA - CC. LLANOGRANDE',
            'id_ciudad'    => '1',
            'telefono'    => 2864016,
            'direccion'    => 'Locales 206 – 207',
        ]);
        Sede::create([

            'nombre'    => 'CALI',
            'id_ciudad'    => '2',
            'telefono'    => 3734470,
            'direccion'    => 'Av. 2da. norte no 24N – 83',
        ]);
        Sede::create([

            'nombre'    => 'ROZO',
            'id_ciudad'    => '3',
            'telefono'    => 3173872024,
            'direccion'    => 'Calle 10 no 9a-23',
        ]);
    }
}
