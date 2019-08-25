<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Libro::class, function (Faker $faker) {
    return [
        'nombre_del_libro'=>$faker->title,
        'año_publicacion'=>$faker->year($min = 1900, $max = 'now'),
        'autor_id'=> function(){
            return factory(App\Models\Autor::class)-> create()->id;
        }
    ];
});
