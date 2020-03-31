<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'post_id' => rand(1,300),
        'path'=> 'https://source.unsplash.com/random/800x600',

    ];
});
