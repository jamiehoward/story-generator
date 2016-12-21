<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Story::class, function (Faker\Generator $faker) {
    $conflict = \App\Conflict::get()->random();

    return [
        'user_id' => factory(App\User::class)->create()->id,
    	'title' => $faker->sentence(),
        'cover_image' => $faker->imageUrl(600,927),
        'setting' => $faker->country(),
        'main_character_id' => factory(App\Character::class)->create()->id,
        'villain_id' => factory(App\Character::class)->create()->id
    ];
});