<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
    	    'nuip'=> rand(1,10000),	
			'nombreCli'=> $faker->text(20),
			'estadoEmp'=> $faker->randomElement(['Activo', 'Retirado']),
			'tipoIdEmp'=> $faker->text(20),
			'direccionEmp'=> $faker->text(20),
			'oficinaEmp'=> $faker->text(20),
			'ciudadEmp'=> $faker->text(20),
			'telefonoEmp'=> $faker->text(20),
			'emailEmp'=> $faker->text(20),
			'fechaIngEmp'=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'tipoEmp'=> $faker->randomElement(['Empresa']),
			'idEmpresaContraEmp'=> rand(1,10000),
			'idNIT'=> rand(1,5),
			'nombreEmp'=> $faker->text(20),
			'estadoPago'=> $faker->text(20),

			];
});
    