<?php

$factory->define(App\MealTranslation::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "slug" => $faker->name,
        "description" => $faker->name,
    ];
});
