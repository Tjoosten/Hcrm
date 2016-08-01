<?php

/**
 * --------------------------------------------------------------------------
 * Status factory
 * --------------------------------------------------------------------------
 *
 * +-------------+------------------+------+-----+---------+----------------+
 * | Field       | Type             | Null | Key | Default | Extra          |
 * +-------------+------------------+------+-----+---------+----------------+
 * | id          | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | name        | varchar(255)     | NO   |     | NULL    |                |
 * | description | varchar(255)     | NO   |     | NULL    |                |
 * | created_at  | timestamp        | YES  |     | NULL    |                |
 * | updated_at  | timestamp        | YES  |     | NULL    |                |
 * +-------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\Status::class, function (Faker\Generator $faker) {
    return [
        'name'        => 'Status nname',
        'description' => 'Status description'
    ];
});