<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
            'nombre'=> $faker->text(20),
            'tipo'=> $faker->randomElement(['EPS', 'ARL', 'AFP', 'CajaComp']),
			'contacto'=> $faker->text(20),
			
    ];
});
