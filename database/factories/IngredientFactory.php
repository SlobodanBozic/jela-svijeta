<?php

$factory->define(App\Ingredient::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "slug" => $faker->name,
    ];
});
