<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $name = $faker->unique()->word(5);
    $description = $faker->text(500);
    return [
        'name' => $name,
        'url'  => Str::slug($name),
    ];
});
