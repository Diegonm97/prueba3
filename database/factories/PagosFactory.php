<?php

use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {
    return [
            'nuipPago' => rand(1,10000),  
            'nombrePago' => $faker->text(20),
            'oficinaPago' => $faker->text(20),
            'telefonoPago' => $faker->text(20),
            'emailPago' => $faker->text(20),
            'salarioPago' => rand(100000,150000),
            'EPSpago' => rand(100000,150000),
            'AFPpago' => rand(100000,150000),
            'ARLpago' => rand(100000,150000),
            'cajaCompPago' => rand(100000,150000),
            'mesPago' => $faker->text(20),
            'estadoClientePago' => $faker->text(20),
            'sumaPago' => rand(100000,150000),
            'interesesPago' => rand(100000,150000),
            'sumTotalPago' => rand(100000,150000),
            'abonoPago' => rand(100000,150000),
            'formaPago' => $faker->text(20),
            'proximoPago' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'observacionPago' => $faker->text(20),
            'informePago' => $faker->text(20),
            'empresaContPago' => $faker->text(20),
            'costoAdminPago' => rand(100000,150000),
            'EMIpago' => rand(100000,150000),
            'descuentoPago' => rand(100000,150000),
            'UPCadicPago' => rand(100000,150000),
            'sevFunePago' => rand(100000,150000),
            'inscripcionPago' => rand(100000,150000),
            'activacionPago' => rand(100000,150000),
            'aporteVoluPago' => rand(100000,150000),

                  ];
});