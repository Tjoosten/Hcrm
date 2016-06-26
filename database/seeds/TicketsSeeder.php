<?php

use App\Tickets;
use Illuminate\Database\Seeder;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('tickets')->delete();

       $tickets = [
           ['id' => 1, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Sales', 'priority' => 'Normal', 'subject' => 'When will my order be delivered?', 'description' => 'since this morning our server went offline' ],
           ['id' => 2, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Support', 'priority' => 'Urgent', 'subject' => 'Server offline', 'description' => 'since this morning our server went offline' ],
           ['id' => 3, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Sales', 'priority' => 'Normal', 'subject' => 'When will my order be delivered?', 'description' => 'since this morning our server went offline' ],
           ['id' => 4, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Support', 'priority' => 'Urgent', 'subject' => 'Server offline', 'description' => 'since this morning our server went offline' ],
           ['id' => 5, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Sales', 'priority' => 'Normal', 'subject' => 'When will my order be delivered?', 'description' => 'since this morning our server went offline' ],
           ['id' => 6, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Support', 'priority' => 'Urgent', 'subject' => 'Server offline', 'description' => 'since this morning our server went offline' ],
           ['id' => 7, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Sales', 'priority' => 'Normal', 'subject' => 'When will my order be delivered?', 'description' => 'since this morning our server went offline' ],
           ['id' => 8, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '1', 'type' => 'Support', 'priority' => 'Urgent', 'subject' => 'Server offline', 'description' => 'since this morning our server went offline' ],
           ['id' => 9, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '3', 'type' => 'Sales', 'priority' => 'Normal', 'subject' => 'When will my order be delivered?', 'description' => 'since this morning our server went offline' ],
           ['id' => 10, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '2', 'type' => 'Support', 'priority' => 'Urgent', 'subject' => 'Server offline', 'description' => 'since this morning our server went offline' ],
           ['id' => 11, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '2', 'type' => 'Sales', 'priority' => 'Normal', 'subject' => 'When will my order be delivered?', 'description' => 'since this morning our server went offline' ],
           ['id' => 12, 'customer_id' => '1', 'assigned_id' => '1', 'status_id' => '2', 'type' => 'Support', 'priority' => 'Urgent', 'subject' => 'Server offline', 'description' => 'since this morning our server went offline' ],

       ];
       foreach ($tickets as $data) {
         Tickets::create($data);
        }

    }
}
