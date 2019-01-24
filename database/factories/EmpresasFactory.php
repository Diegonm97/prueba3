<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
    	    'nuip'=> rand(1,10000),	
			'nombreEmp'=> $faker->text(20),
			'estadoEmp'=> $faker->randomElement(['Activo', 'Retirado']),
			'tipoIdEmp'=> $faker->text(20),
			'direccionEmp'=> $faker->text(20),
			'oficinaEmp'=> $faker->text(20),
			'ciudadEmp'=> $faker->text(20),
			'telefonoEmp'=> $faker->text(20),
			'emailEmp'=> $faker->text(20),
			'fechaNacEmp'=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'salarioEmp'=> rand(100000,2000000),
			'rangoEmp'=>  rand(1,5),
			'EPSEmp'=> rand(100000,150000),
			'ARLEmp'=> rand(100000,150000),
			'AFPEmp'=> rand(100000,150000),
			'cajaCompEmp'=> rand(100000,150000),
			'beneficioEmp'=> rand(100000,150000),
			'fechaIngEmp'=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'tipoEmp'=> $faker->randomElement(['Independiente', 'Asociado', 'Empresa']),
			'idEmpresaContraEmp'=> $faker->text(20),
			'idNIT'=> $faker->text(20),
			'nombreEmpEmp'=> $faker->text(20),
			'UPCadicEmp'=> rand(100000,150000),
			'estadoPago'=> $faker->text(20),

			];
});
    