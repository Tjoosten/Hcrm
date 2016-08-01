<?php

/**
 * -------------------------------------------------------------------------
 * Knowledge factory
 * -------------------------------------------------------------------------
 *
 * +------------+------------------+------+-----+---------+----------------+
 * | Field      | Type             | Null | Key | Default | Extra          |
 * +------------+------------------+------+-----+---------+----------------+
 * | id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | question   | varchar(255)     | NO   |     | NULL    |                |
 * | answer     | text             | NO   |     | NULL    |                |
 * | created_at | timestamp        | YES  |     | NULL    |                |
 * | updated_at | timestamp        | YES  |     | NULL    |                |
 * +------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\Knowledge::class, function (Faker\Generator $faker) {
    return [
        'question' => 'Is this a question?',
        'answer'   => $faker->text(200),
    ];
});