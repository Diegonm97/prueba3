<?php

use Faker\Generator as Faker;

$factory->define(App\Clientes::class, function (Faker $faker) {
	return [
			'nuip'=> rand(1,10000),	
			'nombreCli'=> $faker->text(20),
			'apellidoCli'=> $faker->text(20),
			'estadoCli'=> $faker->randomElement(['Activo', 'Retirado']),
			'tipoIdCli'=> $faker->text(20),
			'direccionCli'=> $faker->text(20),
			'oficinaCli'=> $faker->text(20),
			'ciudadCli'=> $faker->text(20),
			'telefonoCli'=> rand(100000,150000),
			'emailCli'=> $faker->text(20),
			'fechaNacCli'=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'salarioCli'=> rand(100000,2000000),
			'rangoCli'=>  rand(1,5),
			'EPScli'=> rand(100000,150000),
			'nombreEPScli'=> $faker->randomElement(['SOS', 'NuevaEPS']),
			'ARLcli'=> rand(100000,150000),
			'nombreARLcli'=> $faker->randomElement(['SURA', 'Colpatria']),
			'AFPcli'=> rand(100000,150000),
			'nombreAFPcli'=> $faker->randomElement(['Porvenir', 'CCOP']),
			'cajaCompCli'=> rand(100000,150000),
			'nombreCajaCompCli'=> $faker->randomElement(['Confandi', 'Comfenalco']),
			'beneficioCli'=> rand(100000,150000),
			'fechaIngCli'=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'tipoCli'=> $faker->randomElement(['Independiente', 'Asociado', 'Empresa']),
			'idEmpresaContraCli'=> $faker->text(20),
			'idNIT'=> $faker->text(20),
			'nombreEmpcli'=> $faker->text(20),
			'UPCadicCli'=> rand(100000,150000),
			'estadoPago'=> $faker->text(20),

			];
});
    