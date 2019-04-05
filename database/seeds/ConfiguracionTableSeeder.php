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
                        'codigo'    => 'EPS',
                        'valor'    => 12.5,
                ]);
                Configuracion::create([

                        'nombre'    => 'ARLR1',
                        'codigo'    => 'ARLR1',
                        'valor'    => 0.522,
                ]);
                Configuracion::create([

                        'nombre'    => 'ARLR2',
                        'codigo'    => 'ARLR2',
                        'valor'    => 1.044,
                ]);

                Configuracion::create([

                        'nombre'    => 'ARLR3',
                        'codigo'    => 'ARLR3',
                        'valor'    => 2.436,
                ]);
                Configuracion::create([

                        'nombre'    => 'ARLR4',
                        'codigo'    => 'ARLR4',
                        'valor'    => 4.35,
                ]);
                Configuracion::create([

                        'nombre'    => 'ARLR5',
                        'codigo'    => 'ARLR5',
                        'valor'    => 6.96,
                ]);
                Configuracion::create([

                        'nombre'    => 'AFP',
                        'codigo'    => 'AFP',
                        'valor'    => 16,
                ]);
                Configuracion::create([

                        'nombre'    => 'CAJACOMP',
                        'codigo'    => 'CAJACOMP',
                        'valor'    => 9,
                ]);
                // Configuracion::create([

                //         'nombre'    => 'CCFautoliquidacion',
                //         'codigo'    => 'CCF',
                //         'valor'    => 0.09,
                // ]);
                Configuracion::create([

                        'nombre'    => 'Sena',
                        'codigo'    => 'SENA',
                        'valor'    => 0.02,
                ]);
                Configuracion::create([

                        'nombre'    => 'ICBF',
                        'codigo'    => 'ICBF',
                        'valor'    => 0.03,
                ]);
                // Configuracion::create([

                //         'nombre'    => 'EPS1607',
                //         'codigo'    => 12,
                //         'valor'    => 0.04,
                // ]);
                // Configuracion::create([

                //         'nombre'    => 'CAJA1607',
                //         'codigo'    => 13,
                //         'valor'    => 0.04,
                // ]);

                
                Configuracion::create([

                        'nombre'    => 'Salario',
                        'codigo'    => 'SMMLV',
                        'valor'    => 828500,
                ]);
                Configuracion::create([

                        'nombre'    => 'IVA',
                        'codigo'    => 'IVA',
                        'valor'    => 19,
                ]);
                Configuracion::create([

                        'nombre'    => 'Administracion',
                        'codigo'    => 'ADMIN',
                        'valor'    => 31000,
                ]);
                // Configuracion::create([

                //         'nombre'    => 'AdminIndepen',
                //         'codigo'    => 18,
                //         'valor'    => 17000,
                // ]);
                Configuracion::create([

                        'nombre'    => 'Inscripcion',
                        'codigo'    => 'INSCRI',
                        'valor'    => 105000,
                ]);
                // Configuracion::create([

                //         'nombre'    => 'Activacion',
                //         'codigo'    => 20,
                //         'valor'    => 78000,
                // ]);
                Configuracion::create([

                        'nombre'    => 'UPC',
                        'codigo'    => 'UPC',
                        'valor'    => 20000,
                ]);
                
                Configuracion::create([

                        'nombre'    => 'EMI',
                        'codigo'    => 'EMI',
                        'valor'    => 40750,
                ]);
                Configuracion::create([

                        'nombre'    => 'Sercofun',
                        'codigo'    => 'SERCOFUN',
                        'valor'    => 19150,
                ]);
                // 'DiasHabiles'   => 0.1,//no sabemos que es
                //'IndepVencimiento'=> 0.1,//no sabemos que es
                //'Intereses' => 0.1,//no sabemos que es
        }
}
