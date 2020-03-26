<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $name = $faker->sentence(5);
    return [
        'user_id'       =>  rand(1,30) ,
        'category_id'   =>  rand(1,20),  
        'name'          =>  $name,
        'url'           =>  Str::slug($name),
        'excerpt'       =>  $faker->text(200),
        'body'          =>  $faker->text(800),
        'image'         =>  $faker->imageUrl($with = 1200, $height = 400),
        'status'        =>  $faker->randomElement(['PUBLISHED','DRAFT'])
       ];
});
