<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
    	
			'estadoEmp'		=> $faker->randomElement(['Activo', 'Retirado']),
			'tipoIdEmp'		=> $faker->text(20),
			'direccionEmp'	=> $faker->text(20),
			'oficinaEmp'	=> $faker->text(20),
			'ciudadEmp'		=> $faker->text(20),
			'nombreRep'		=> $faker->text(20),
			'telefonoEmp'	=> $faker->text(20),
			'emailEmp'		=> $faker->text(20),
			'EPSEmp'		=> rand(1,10000),
	 		'nombreEPSEmp'	=> $faker->text(20),
	 		'ARLEmp'		=> rand(1,10000),
	 		'nombreARLEmp'	=> $faker->text(20),
	 		'AFPEmp'		=> rand(1,10000),
	 		'nombreAFPEmp'	=> $faker->text(20),
	 		'cajaCompEmp'	=> rand(1,10000),
	 		'nombreCajaCompEmp'	=> $faker->text(20),
		 	'administracionEmp'	=> rand(1,10000),
			 'inscripcionEmp' => rand(1,10000),
			'fechaIngEmp'		=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'tipoEmp'			=> $faker->randomElement(['Empresa']),
			'idEmpresaContraEmp'=> rand(1,10000),
			'idNIT'				=> rand(1,5),
			'nombreEmp'			=> $faker->text(20),
			'estadoPago'		=> $faker->text(20),

			];
});
    