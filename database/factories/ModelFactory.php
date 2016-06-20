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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customers::class, function (Faker\Generator $faker) {
    return [
        'name'    => $faker->lastName,
        'fname'   => $faker->firstName,
        'street'  => $faker->streetAddress,
        'zipcode' => $faker->postcode,
        'city'    => $faker->city,
        'state'   => $faker->address,
        'country' => $faker->country,
        'email'   => $faker->email,
        'phone'   => $faker->phoneNumber,
        'mobile'  => $faker->phoneNumber,
        'company' => $faker->company,
        'vat'     => $faker->vat,
    ];
});

$factory->define(App\Status::class, function (Faker\Generator $faker) {
    return [
        'name'        => 'Status nname',
        'description' => 'Status description'
    ];
});

$factory->define(App\Departments::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->text(200),
        'manager_id'  => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
