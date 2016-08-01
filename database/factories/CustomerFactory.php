<?php

/**
 * -----------------------------------------------------------------------------
 * Customer Factory
 * -----------------------------------------------------------------------------
 *
 * +----------------+------------------+------+-----+---------+----------------+
 * | Field          | Type             | Null | Key | Default | Extra          |
 * +----------------+------------------+------+-----+---------+----------------+
 * | id             | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | name           | varchar(255)     | NO   |     | NULL    |                |
 * | fname          | varchar(255)     | NO   |     | NULL    |                |
 * | street         | varchar(255)     | NO   |     | NULL    |                |
 * | zipcode        | varchar(255)     | NO   |     | NULL    |                |
 * | city           | varchar(255)     | NO   |     | NULL    |                |
 * | state          | varchar(255)     | NO   |     | NULL    |                |
 * | country        | varchar(255)     | NO   |     | NULL    |                |
 * | email          | varchar(255)     | NO   |     | NULL    |                |
 * | phone          | varchar(255)     | NO   |     | NULL    |                |
 * | mobile         | varchar(255)     | NO   |     | NULL    |                |
 * | company        | varchar(255)     | NO   |     | NULL    |                |
 * | vat            | varchar(255)     | NO   |     | NULL    |                |
 * | stripe_id      | varchar(255)     | YES  |     | NULL    |                |
 * | card_brand     | varchar(255)     | YES  |     | NULL    |                |
 * | card_last_four | varchar(255)     | YES  |     | NULL    |                |
 * | trial_ends_at  | timestamp        | YES  |     | NULL    |                |
 * | created_at     | timestamp        | YES  |     | NULL    |                |
 * | updated_at     | timestamp        | YES  |     | NULL    |                |
 * +----------------+------------------+------+-----+---------+----------------+
 */

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