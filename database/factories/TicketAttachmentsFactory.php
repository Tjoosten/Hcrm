<?php

/**
 * -------------------------------------------------------------------------
 * Ticket Attachments factory
 * -------------------------------------------------------------------------
 *
 * +------------+------------------+------+-----+---------+----------------+
 * | Field      | Type             | Null | Key | Default | Extra          |
 * +------------+------------------+------+-----+---------+----------------+
 * | id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
 * | comment_id | int(11)          | NO   |     | NULL    |                |
 * | file_name  | varchar(255)     | NO   |     | NULL    |                |
 * | file_path  | varchar(255)     | NO   |     | NULL    |                |
 * | created_at | timestamp        | YES  |     | NULL    |                |
 * | updated_at | timestamp        | YES  |     | NULL    |                |
 * +------------+------------------+------+-----+---------+----------------+
 */

$factory->define(App\TicketAttachments::class, function (Faker\Generator $faker) {
    return [
        'comment_id' => 4,
        'file_name'  => 'File name',
        'file_path'  => 'path/to/file/filename'
    ];
});