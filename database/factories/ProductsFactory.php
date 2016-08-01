<?php

/**
 * -------------------------------------------------------------------------------
 * Products Categories
 * -------------------------------------------------------------------------------
 *
 * +------------------+------------------+------+-----+---------+----------------+
 * | Field            | Type             | Null | Key | Default | Extra          |
 * +------------------+------------------+------+-----+---------+----------------+
 * | id               | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | name             | varchar(255)     | NO   |     | NULL    |                |
 * | category         | int(11)          | NO   |     | NULL    |                |
 * | disk_space       | varchar(255)     | NO   |     | NULL    |                |
 * | data_traffic     | varchar(255)     | NO   |     | NULL    |                |
 * | memory           | varchar(255)     | NO   |     | NULL    |                |
 * | Operating_System | varchar(255)     | NO   |     | NULL    |                |
 * | created_at       | timestamp        | YES  |     | NULL    |                |
 * | updated_at       | timestamp        | YES  |     | NULL    |                |
 * +------------------+------------------+------+-----+---------+----------------+
 */

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