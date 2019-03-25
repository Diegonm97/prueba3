<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado_empresa::class, function (Faker $faker) {
    return [
        'id_empresa'=> rand(1,10),
        'identificacion'=> rand(1,10000),
        'tipo_id'=> rand(1,3),
        'nombres'=> $faker->text(10),
        'apellidos'=> $faker->text(20),
		'telefono'=> rand(100000,150000),
		'direccion'=> $faker->text(10),
		'email'=> $faker->text(10),
		'tipo_cliente'=> rand(1,2),
		'fecha_ingreso'=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'fecha_nacimiento'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'salario'=> rand(100000,2000000),
        'rango'=> rand(1,5),
        'upc'=> rand(1,5),
        'id_ciudad'=> rand(1,6),
		'id_eps'=> rand(1,3),
	    'id_arl'=> rand(4,6),
		'id_afp'=>rand(7,9),
		'id_cjc'=> rand(10,12),
		'estado'=> rand(1,2),
    ];
});
