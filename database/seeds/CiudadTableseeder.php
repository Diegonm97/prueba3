<?php

use Illuminate\Database\Seeder;
use App\Ciudad;

class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create([

            'nombre' => 'PALMIRA',
            'codigo' => 1,
        ]);
        Ciudad::create([

            'nombre' => 'CALI',
            'codigo' => 2,
        ]);

        Ciudad::create([

            'nombre' => 'ROZO',
            'codigo' => 3,
        ]);

        Ciudad::create([

            'nombre' => 'CANDELARIA',
            'codigo' => 4,
        ]);
        Ciudad::create([

            'nombre' => 'YUMBO',
            'codigo' => 5,
        ]);
        Ciudad::create([

            'nombre' => 'POPAYAN',
            'codigo' => 6,
        ]);
    }
}

