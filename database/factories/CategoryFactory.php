<?php

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
      "title" => $faker->name,
      "slug" => $faker->name,
    ];
});
