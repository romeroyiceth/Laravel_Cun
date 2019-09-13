<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Editor::class, function (Faker $faker) {
    return [
        'cedula'=>$faker->numberBetween($min = 10000, $max = 100000),
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastname,
        'correo'=>$faker->unique()->freeEmail,
        'telefono'=>$faker->numberBetween($min = 2000000, $max = 2999999),
        'direccion'=>$faker->streetAddress,
        'contenido_cuenta'=>$faker->creditCardDetails,
        'editorial_id'=> function(){
            return factory(App\Models\Editorial::class)-> create()->id;
        }
  
    ];
});
