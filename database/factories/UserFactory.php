<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
        $number = rand(10, 46);
        $gender = rand(0, 1) ? 'men' : 'women';

        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('123456'), // secret
            'avatar' => "https://randomuser.me/api/portraits/${gender}/{$number}.jpg",
            'remember_token' => str_random(10),
        ];
    });
