<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       \DB::table('statuses')->delete();

        Status::create([
            'name'        => 'New',
            'description' => 'Used for indicating new issues.',
        ]);

        Status::create([
            'name'        => 'Open',
            'description' => 'Used for indicating open tickets.',
        ]);

        Status::create([
            'name'        => 'Closed',
            'description' => 'Used for indicating closed tickets.',
        ]);
    }
}
