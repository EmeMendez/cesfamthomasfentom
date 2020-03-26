<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->sentence(5);
    $description = $faker->text(500);
    return [
        'name' => $name,
        'url'  => Str::slug($name),
        'description' => $description,
    ];
});
