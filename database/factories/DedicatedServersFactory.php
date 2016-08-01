<?php

/**
 * -----------------------------------------------------------------------------
 * Dedicated Servers factory
 * -----------------------------------------------------------------------------
 *
 * +----------------+------------------+------+-----+---------+----------------+
 * | Field          | Type             | Null | Key | Default | Extra          |
 * +----------------+------------------+------+-----+---------+----------------+
 * | id             | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | customer_id    | int(11)          | NO   |     | NULL    |                |
 * | server_name    | varchar(255)     | NO   |     | NULL    |                |
 * | reference      | varchar(255)     | NO   |     | NULL    |                |
 * | status         | varchar(255)     | NO   |     | NULL    |                |
 * | provider       | varchar(255)     | NO   |     | NULL    |                |
 * | provider_id    | int(11)          | NO   |     | NULL    |                |
 * | location       | varchar(255)     | NO   |     | NULL    |                |
 * | diskspace      | varchar(255)     | NO   |     | NULL    |                |
 * | traffic        | varchar(255)     | NO   |     | NULL    |                |
 * | start_date     | varchar(255)     | NO   |     | NULL    |                |
 * | end_date       | varchar(255)     | NO   |     | NULL    |                |
 * | sla            | varchar(255)     | NO   |     | NULL    |                |
 * | vendor         | varchar(255)     | NO   |     | NULL    |                |
 * | vendor_product | varchar(255)     | NO   |     | NULL    |                |
 * | created_at     | timestamp        | YES  |     | NULL    |                |
 * | updated_at     | timestamp        | YES  |     | NULL    |                |
 * +----------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\DedicatedServers::class, function (Faker\Generator $faker) {
    return [
        'customer_id'    => 1,
        'server_name'    => $faker->name,
        'reference'      => $faker->text(200),
        'status'         => 'running',
        'provider'       => 'leaseweb',
        'provider_id'    => 1,
        'location'       => 'brussel',
        'diskspace'      => '5GB',
        'traffic'        => '1GB',
        'start_date'     => $faker->dateTimeThisMonth,
        'end_date'       => $faker->dateTime,
        'sla'            => '90% up',
        'vendor'         => 'vendor name',
        'vendor_product' => 'product name'
    ];
});