<?php

use Illuminate\Database\Seeder;
use Fenos\Notifynder\Models\NotificationCategory as Notification;

class NotificationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notification::create([
            'name' => 'customer.create',
            'text' => '{from.username} added a new customer.',
        ]);

        Notification::create([
            'name' => 'customer.update',
            'text' => '{from.username} updated a customer.',
        ]);
    }
}
