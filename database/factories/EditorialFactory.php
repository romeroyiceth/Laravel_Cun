<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Editorial::class, function (Faker $faker) {
    return [
       
        'nit'=>$faker->numberBetween($min = 10000, $max = 100000),
        'nombre'=>$faker->company,
        'Fecha_Fundacion'=>$faker->date($format = 'Y-m-d', $max = '1999'),
        
        
    ];
});
