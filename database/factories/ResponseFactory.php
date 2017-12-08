<?php

use Faker\Generator as Faker;

$factory->define(App\Response::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,15),
        'comment_id' => rand(1,500),
        'comment' => $faker->sentence(15),
        'votes'   => rand(1,211)
    ];
});
