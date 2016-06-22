<?php

$factory->define(Chrisbjr\ApiGuard\Models\ApiKey::class, function (Faker\Generator $faker) {
    return [
        'user_id'       => function () {
            return factory(App\User::class)->create()->id;
        },
        'service'       => 'Testing',
        'key'           => str_random(40),
        'level'         => '32767',
        'ignore_limits' => false,
        'created_at'    => new DateTime,
        'updated_at'    => new DateTime,
        'deleted_at'    => new DateTime,
    ];
});