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


// Instruct the factory how to create a fake User instance
$factory->define(App\User::class, function ($faker) {
	$fake_date = $faker->dateTimeThisYear();
	return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('user'),
        'remember_token' => '',
		'created_at' => $fake_date,
		'updated_at' => $fake_date,
    ];
});

// Instruct the factory how to create a fake Entry instance
$factory->define(App\Entry::class, function ($faker) {
	$fake_date = $faker->dateTimeThisYear();
	return [
		'title' => $faker->text(60),
		'body' => $faker->text(1024),
		'created_at' => $fake_date,
		'updated_at' => $fake_date,
	];
});
	
// Instruct the factory how to create a fake Comment instance
$factory->define(App\Comment::class, function ($faker) {
	$fake_date = $faker->dateTimeThisYear();
	return [
		// 'id' => auto-generated
		'user_id' => $faker->numberBetween(1, 10),
		'entry_id' => $faker->numberBetween(1, 200),
		'body' => $faker->text(255),
		'created_at' => $fake_date,
		'updated_at' => $fake_date,
	];
});
	
	
		