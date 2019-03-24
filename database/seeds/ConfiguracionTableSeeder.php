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
            
            'nombre'    => 'EPS',
            'codigo'    => 1,
            'valor'    => 0.125,
            ]);
        Configuracion::create([
            
                'nombre'    => 'rango1',
                'codigo'    => 2,
                'valor'    => 0.00522,
                ]);
        Configuracion::create([
            
                'nombre'    => 'rango2',
                'codigo'    => 3,
                'valor'    => 0.01044,
                ]);

         Configuracion::create([
            
                'nombre'    => 'rango3',
                'codigo'    => 4,
                'valor'    => 0.02436,
                ]);
        Configuracion::create([
            
                'nombre'    => 'rango4',
                'codigo'    => 5,
                'valor'    => 0.0435,
                ]);
        Configuracion::create([
            
                'nombre'    => 'rango5',
                'codigo'    => 6,
                'valor'    => 0.0696,
                ]);
        Configuracion::create([
            
                'nombre'    => 'AFP',
                'codigo'    => 7,
                'valor'    => 0.16,
                ]);
        Configuracion::create([
            
                'nombre'    => 'cajaComp',
                'codigo'    => 8,
                'valor'    => 0.09,
                ]);
        Configuracion::create([
            
                'nombre'    => 'CCFautoliquidacion',
                'codigo'    => 9,
                'valor'    => 0.09,
                ]);
        Configuracion::create([
            
                'nombre'    => 'Sena',
                'codigo'    => 10,
                'valor'    => 0.02,//no sabemos que es
                ]);
        Configuracion::create([
            
                'nombre'    => 'ICBF',
                'codigo'    => 11,
                'valor'    => 0.03,
                ]);
        Configuracion::create([
            
                'nombre'    => 'EPS1607',
                'codigo'    => 12,
                'valor'    => 0.04,
                ]);
        Configuracion::create([
            
                'nombre'    => 'CAJA1607',
                'codigo'    => 13,
                'valor'    => 0.04,
                ]);

         Configuracion::create([
            
                'nombre'    => 'CAJA1607',
                'codigo'    => 14,
                'valor'    => 0.04,
                ]);
        Configuracion::create([
            
                'nombre'    => 'salario',
                'codigo'    => 15,
                'valor'    => 0.19,
                ]);
        Configuracion::create([
            
                'nombre'    => 'IVA',
                'codigo'    => 16,
                'valor'    => 828500,
                ]);
         Configuracion::create([
            
                'nombre'    => 'Administracion',
                'codigo'    => 17,
                'valor'    => 31000,
                ]);
         Configuracion::create([
            
                'nombre'    => 'AdminIndepen',
                'codigo'    => 18,
                'valor'    => 17000,
                ]);
         Configuracion::create([
            
                'nombre'    => 'Inscripcion',
                'codigo'    => 19,
                'valor'    => 17000,
                ]);
         Configuracion::create([
            
                'nombre'    => 'Activacion',
                'codigo'    => 20,
                'valor'    => 78000,
                ]);
        
           // 'DiasHabiles'   => 0.1,//no sabemos que es
            //'IndepVencimiento'=> 0.1,//no sabemos que es
            //'Intereses' => 0.1,//no sabemos que es

        
    }
}
