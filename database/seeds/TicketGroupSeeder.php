<?php

use Illuminate\Database\Seeder;
use App\TicketGroups;

class TicketGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketGroups::create(['name' => 'Support']);
        TicketGroups::create(['name' => 'Sales']);
        TicketGroups::create(['name' => 'Security']);
        TicketGroups::create(['name' => 'Administration']);
        TicketGroups::create(['name' => 'CDN']);
        TicketGroups::create(['name' => 'Feedback']);
    }
}
