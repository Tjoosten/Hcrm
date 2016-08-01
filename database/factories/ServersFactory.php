<?php

/**
 * -------------------------------------------------------------------------
 * Servers factory
 * -------------------------------------------------------------------------
 *
 * +------------+------------------+------+-----+---------+----------------+
 * | Field      | Type             | Null | Key | Default | Extra          |
 * +------------+------------------+------+-----+---------+----------------+
 * | id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | name       | varchar(255)     | NO   |     | NULL    |                |
 * | public_ip  | varchar(255)     | NO   |     | NULL    |                |
 * | location   | varchar(255)     | NO   |     | NULL    |                |
 * | status     | varchar(255)     | NO   |     | NULL    |                |
 * | created_at | timestamp        | YES  |     | NULL    |                |
 * | updated_at | timestamp        | YES  |     | NULL    |                |
 * +------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\Servers::class, function(Faker\Generator $faker) {
    return [
        'name'       => $faker->name,
        'public_ip'  => $faker->ipv4,
        'location'   => $faker->locale,
        'status'     => $faker->name
    ];
});