<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
        'numero_cedula'=>$faker->numberBetween($min = 1000, $max = 10000),
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail ,
        'telefono'=>$faker->numberBetween($min = 2000000, $max = 2999999)
    ];
});
