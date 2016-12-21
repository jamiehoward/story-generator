<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Story::class, function (Faker\Generator $faker) {
    $gender = collect(['male', 'female'])->random();

    return [
    	'title' => collect([null,null,null,$faker->title($gender)])->random(),
    	'firstName' => $faker->firstName($gender),
    	'lastName' => $faker->lastName(),
    	'suffix' => collect([null,null,null,$faker->suffix()])->random(),
        'gender' => $gender,
        'occupation' => getOccupation(),
        'traits' => getCharacterTraits(),
        'age' => rand(12, 99),
        'hairColor' => collect(['black','brown','red','blonde','white'])->random()
    ];
});

