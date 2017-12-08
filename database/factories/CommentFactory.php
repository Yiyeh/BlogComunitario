<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,15),
        'post_id' => rand(1,50),
        'comment' => $faker->sentence(15),
        'votes'   => rand(1,211)
    ];
});
