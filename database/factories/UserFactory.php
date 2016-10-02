<?php

/**
 * -----------------------------------------------------------------------------
 * Users factory
 * -----------------------------------------------------------------------------
 *
 * +----------------+------------------+------+-----+---------+----------------+
 * | Field          | Type             | Null | Key | Default | Extra          |
 * +----------------+------------------+------+-----+---------+----------------+
 * | id             | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | name           | varchar(255)     | NO   |     | NULL    |                |
 * | email          | varchar(255)     | NO   | UNI | NULL    |                |
 * | password       | varchar(255)     | NO   |     | NULL    |                |
 * | remember_token | varchar(100)     | YES  |     | NULL    |                |
 * | created_at     | timestamp        | YES  |     | NULL    |                |
 * | updated_at     | timestamp        | YES  |     | NULL    |                |
 * +----------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password = null;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});