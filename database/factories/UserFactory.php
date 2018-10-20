<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Clientes::class, function (Faker $faker) {
	return [
			'nuip'=> $faker->numberBetween(1111111111111111,2222222222222222),
			'nombreCli'=> $faker->text(20),
			'estadoCli'=> $faker->text(20),
			'tipoIdCli'=> $faker->text(20),
			'direccionCli'=> $faker->text(20),
			'oficinaCli'=> $faker->text(20),
			'ciudadCli'=> $faker->text(20),
			'telefonoCli'=> $faker->text(20),
			'emailCli'=> $faker->text(20),
			'fechaNacCli'=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'salarioCli'=> $faker->numberBetween(100000,2000000),
			'rangoCli'=>  $faker->numberBetween(1,5),
			'EPScli'=> $faker->numberBetween(100000,150000),
			'ARLcli'=> $faker->numberBetween(100000,150000),
			'AFPcli'=> $faker->numberBetween(100000,150000),
			'cajaCompCli'=> $faker->numberBetween(100000,150000),
			'beneficioCli'=> $faker->numberBetween(100000,150000),
			'fechaIngCli'=> $faker->date($format = 'Y-m-d', $max = 'now'),
			'idEmpresaContraCli'=> $faker->text(20),
			'idNIT'=> $faker->text(20),
			'nombreEmpcli'=> $faker->text(20),
			'UPCadicCli'=> $faker->numberBetween(100000,150000),
			'estadoPago'=> $faker->$faker->text(20),

			];
});
