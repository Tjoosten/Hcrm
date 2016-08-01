<?php

/**
 * --------------------------------------------------------------------------
 * Tickets factory
 * --------------------------------------------------------------------------
 *
 * +-------------+------------------+------+-----+---------+----------------+
 * | Field       | Type             | Null | Key | Default | Extra          |
 * +-------------+------------------+------+-----+---------+----------------+
 * | id          | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | customer_id | int(11)          | NO   |     | NULL    |                |
 * | assigned_id | int(11)          | NO   |     | NULL    |                |
 * | status_id   | int(11)          | NO   |     | NULL    |                |
 * | type        | varchar(255)     | NO   |     | NULL    |                |
 * | priority    | varchar(255)     | NO   |     | NULL    |                |
 * | subject     | varchar(255)     | NO   |     | NULL    |                |
 * | description | varchar(255)     | NO   |     | NULL    |                |
 * | is_closed   | int(11)          | NO   |     | NULL    |                |
 * | deleted_at  | timestamp        | YES  |     | NULL    |                |
 * | created_at  | timestamp        | YES  |     | NULL    |                |
 * | updated_at  | timestamp        | YES  |     | NULL    |                |
 * +-------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\Tickets::class, function (Faker\Generator $faker) {
    return [
        'customer_id' => 1,
        'assigned_id' => 1,
        'status_id'   => 1,
        'type'        => 'Technical',
        'priority'    => 'High',
        'subject'     => 'Support ticket',
        'description' => 'This is a description',
        'deleted_at'  => '',
        'is_closed'   => '1'
    ];
});