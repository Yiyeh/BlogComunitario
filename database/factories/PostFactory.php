<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    
    $title = $faker->title;
    return [
        'user_id'       => rand(1,15),
        'acceptedBy'    => rand(1,15),
        'category_id'   => rand(1,15),
        'title'         => $title,
        'slug'          => str_slug($title),
        'file'          => $faker->imageUrl($width = 640, $height = 480),
        'body'          => $faker->sentence(5),
        'votes'         => rand(1,200)
    ];
});
