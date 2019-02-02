<?php

use Illuminate\Database\Seeder;
use App\Configuracion;

class ConfiguracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Configuracion::create([
            
            'tarifaEPS'    => 0.125,
            'tarifaARLr1'  => 0.00522,
            'tarifaARLr2'  => 0.01044,
            'tarifaARLr3'  => 0.02436,
            'tarifaARLr4'  => 0.0435,
            'tarifaARLr5'  => 0.0696,
            'tarifaAFP'    => 0.16,
            'cajaComp'     => 0.04,
            'CCFautoliquidacion'=>0.1, //no sabemos que es
            'tarifaSena'   => 0.1,//no sabemos que es
            'tarifaICBF'   => 0.1,//no sabemos que es
            'tarifaEPS1607'=> 0.04,
            'tarifaCAJA1607'=> 0.04,
            'tarifaEPScolExt'=> 0.1,//no sabemos que es
            'IVA'   => 0.19,
            'salarioMinimo' => 828500,
            'Administracion'=> 31000,
            'AdminIndepen'  => 17000,
            'Inscripcion'   => 105000,
            'Activacion'    => 78000,
            'DiasHabiles'   => 0.1,//no sabemos que es
            'IndepVencimiento'=> 0.1,//no sabemos que es
            'Intereses' => 0.1,//no sabemos que es



        ]);
        
    }
}
