<?php

$factory->define(App\MeaITag::class, function (Faker\Generator $faker) {
    return [
        "meal_id" => $faker->numberBetween(1, 5),
        "tag_id" => $faker->numberBetween(1,5),
    ];
});
