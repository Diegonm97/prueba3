<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
    	
		'nit'=> rand(1,10000), 
		'nombre'=> $faker->text(10), 
		'nombre_contacto'=> $faker->text(10),
		'telefono_contacto'=> rand(100000,150000),
		'email_contacto'=> $faker->text(10), 
		'id_ciudad'=> rand(1,6), 
		'direccion'=> $faker->text(10), 
		'estado'=> rand(1,2), 
		'beneficio'=> rand(1,2), 
		'inscripcion'=> rand(100000,150000),
		'administracion'=> rand(100000,150000), 
		'id_usuario' => rand(1,20), 
		'fecha_ingreso'=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'observacion'=> $faker->text(20),
		'total_pago' => null,
				
			];
});
    