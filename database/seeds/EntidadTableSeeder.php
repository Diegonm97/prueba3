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
        Entidad::create([

            'nombre'=> 'COOMEVA',
            'tipo'=> 1,
        ]);
        Entidad::create([

            'nombre'=> 'SOS',
            'tipo'=> 1,
        ]);
        Entidad::create([

            'nombre'=> 'NUEVA EPS',
            'tipo'=> 1,
        ]);

        Entidad::create([

            'nombre'=> 'SURA',
            'tipo'=> 2,
        ]);
        Entidad::create([

            'nombre'=> 'POSITIVA S.A.S',
            'tipo'=> 2,
        ]);
        Entidad::create([

            'nombre'=> 'COLPATRIA',
            'tipo'=> 2,
        ]);

        Entidad::create([

            'nombre'=> 'PORVENIR S.A',
            'tipo'=> 3,
        ]);
        Entidad::create([

            'nombre'=> 'PROTECCION S.A',
            'tipo'=> 3,
        ]);
        Entidad::create([

            'nombre'=> 'Colfondos Pensiones y Cesantías S.A',
            'tipo'=> 3,
        ]);

        Entidad::create([

            'nombre'=> 'COMFANDI',
            'tipo'=> 4,
        ]);
        Entidad::create([

            'nombre'=> 'COMFENALCO',
            'tipo'=> 4,
        ]);
        Entidad::create([

            'nombre'=> 'ASOCAJAS ',
            'tipo'=> 4,
        ]);
        
    }
}
