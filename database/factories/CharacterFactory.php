<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Character::class, function (Faker\Generator $faker) {
    $gender = collect(['male', 'female'])->random();

    return [
    	'title' => getCharacterTitle($gender),
    	'first_name' => $faker->firstName($gender),
    	'last_name' => $faker->lastName(),
    	'suffix' => getCharacterSuffix(),
        'gender' => $gender == 'male' ? 0 : 1,
        'birthdate' => $faker->dateTimeThisCentury('2000-01-01'),
        'occupation_id' => \App\Occupation::get()->random()->id
    ];
});

function getCharacterTitle($gender)
{
	$faker = \Faker\Factory::create();

	// We have the nulls to make sure we don't return something everytime
	return collect([null,null,null,$faker->title($gender)])->random();	
}

function getCharacterSuffix()
{
	$faker = \Faker\Factory::create();

	// We have the nulls to make sure we don't return something everytime
	return collect([null,null,null,$faker->suffix()])->random();	
}
