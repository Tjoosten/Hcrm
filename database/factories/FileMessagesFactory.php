<?php

/**
 * -------------------------------------------------------------------------
 * File Messages factory
 * -------------------------------------------------------------------------
 *
 * +------------+------------------+------+-----+---------+----------------+
 * | Field      | Type             | Null | Key | Default | Extra          |
 * +------------+------------------+------+-----+---------+----------------+
 * | id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | ticket_id  | int(11)          | NO   |     | NULL    |                |
 * | user_id    | int(11)          | NO   |     | NULL    |                |
 * | message    | text             | NO   |     | NULL    |                |
 * | created_at | timestamp        | YES  |     | NULL    |                |
 * | updated_at | timestamp        | YES  |     | NULL    |                |
 * +------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\FileMessages::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => 4,
        'user_id'   => 1,
        'message'   => 'This is a comment message'
    ];
});