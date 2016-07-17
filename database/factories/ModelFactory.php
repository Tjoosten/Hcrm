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

$factory->define(App\ContactTypes::class, function (Faker\Generator $faker) {
    return ['name' => $faker->name];
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
        'vat'     => 'vat number',
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
    ];
});

$factory->define(App\Knowledge::class, function (Faker\Generator $faker) {
    return [
        'question' => 'Is this a question?',
        'answer'   => $faker->text(200),
    ];
});

$factory->define(App\Tickets::class, function (Faker\Generator $faker) {
    return [
        'customer_id' => 1, 
        'assigned_id' => 1,
        'status_id'   => 1,
        'type'        => 'Technical',
        'priority'    => 'High',
        'subject'     => 'Support ticket',
        'description' => 'This is a description'
    ];
});

$factory->define(App\TicketAttachments::class, function (Faker\Generator $faker) {
    return [
        'comment_id' => 4,
        'file_name'  => 'File name',
        'file_path'  => 'path/to/file/filename'
    ];
});

$factory->define(App\FileMessages::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => 4,
        'user_id'   => 1,
        'message'   => 'This is a comment message'
    ];
});

$factory->define(App\productsCategories::class, function (Faker\Generator $faker) {
    return [
        'category'    => $faker->word,
        'description' => $faker->text(200)
    ];
});

$factory->define(App\products::class, function (Faker\Generator $faker) {
    return [
        'name'             => $faker->word,
        'category'         => 1,
        'disk_space'       => '200 MB',
        'data_traffic'     => '200 MB',
        'memory'           => '4 GB',
        'Operating_System' => 'Windows'
    ];
});

$factory->define(App\Servers::class, function(Faker\Generator $faker) {
    return [
        'name'       => $faker->name,
        'public_ip'  => $faker->ipv4,
        'location'   => $faker->locale,
        'status'     => $faker->name
    ];
});


