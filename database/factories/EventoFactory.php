<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use weborii\Models\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
        'tituloEvento' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'lugarEvento' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'fechaEvento' => $faker->date($format = 'Y-m-d'),
        'horaEvento' => $faker->time($format = 'H:i'),
        'descripcionEvento' => $faker->text($maxNbChars = 200),
        'informacionEvento' => $faker->imageUrl($width = 640, $height = 480),
        'imagenMiniatura' => $faker->imageUrl($width = 262, $height = 100),

    ];
});
