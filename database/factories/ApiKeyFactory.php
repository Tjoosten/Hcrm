<?php

/**
 * ----------------------------------------------------------------------------
 *  Api Keys factory
 * ----------------------------------------------------------------------------
 *
 * +---------------+------------------+------+-----+---------+----------------+
 * | Field         | Type             | Null | Key | Default | Extra          |
 * +---------------+------------------+------+-----+---------+----------------+
 * | id            | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | user_id       | int(10) unsigned | YES  | MUL | NULL    |                |
 * | key           | varchar(40)      | NO   | UNI | NULL    |                |
 * | level         | smallint(6)      | NO   |     | NULL    |                |
 * | ignore_limits | tinyint(1)       | NO   |     | NULL    |                |
 * | created_at    | timestamp        | YES  |     | NULL    |                |
 * | updated_at    | timestamp        | YES  |     | NULL    |                |
 * | deleted_at    | timestamp        | YES  |     | NULL    |                |
 * | service       | varchar(255)     | YES  |     | NULL    |                |
 * +---------------+------------------+------+-----+---------+----------------+
 */

$factory->define(Chrisbjr\ApiGuard\Models\ApiKey::class, function (Faker\Generator $faker) {
    return [
        'user_id'       => function () {
            return factory(App\User::class)->create()->id;
        },
        'service'       => 'Testing',
        'key'           => str_random(40),
        'level'         => '32767',
        'ignore_limits' => false,
        'created_at'    => new DateTime,
        'updated_at'    => new DateTime,
        'deleted_at'    => new DateTime,
    ];
});