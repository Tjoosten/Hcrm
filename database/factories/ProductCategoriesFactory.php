<?php

/**
 * --------------------------------------------------------------------------
 * Products Categories factory
 * --------------------------------------------------------------------------
 *
 * +-------------+------------------+------+-----+---------+----------------+
 * | Field       | Type             | Null | Key | Default | Extra          |
 * +-------------+------------------+------+-----+---------+----------------+
 * | id          | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | category    | varchar(255)     | NO   |     | NULL    |                |
 * | description | text             | NO   |     | NULL    |                |
 * | created_at  | timestamp        | YES  |     | NULL    |                |
 * | updated_at  | timestamp        | YES  |     | NULL    |                |
 * +-------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\productsCategories::class, function (Faker\Generator $faker) {
    return [
        'category'    => $faker->word,
        'description' => $faker->text(200)
    ];
});