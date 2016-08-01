<?php

/**
 * -------------------------------------------------------------------------
 * Comments factory
 * -------------------------------------------------------------------------
 *
 * +------------+------------------+------+-----+---------+----------------+
 * | Field      | Type             | Null | Key | Default | Extra          |
 * +------------+------------------+------+-----+---------+----------------+
 * | id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | user_id    | int(11)          | NO   |     | NULL    |                |
 * | comment    | text             | NO   |     | NULL    |                |
 * | deleted_at | timestamp        | YES  |     | NULL    |                |
 * | created_at | timestamp        | YES  |     | NULL    |                |
 * | updated_at | timestamp        | YES  |     | NULL    |                |
 * +------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\Comments::class, function(Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'comment' => $faker->words(200)
    ];
});