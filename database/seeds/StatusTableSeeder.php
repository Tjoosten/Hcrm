<?php

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

        $data = [
            [
                'name'        => 'New',
                'description' => 'Used for indicating new issues.',
            ], [
                'name'        => 'Open',
                'description' => 'Used for indicating open tickets.',
            ], [
                'name'        => 'Closed',
                'description' => 'Used for indicating closed tickets.',
            ]
        ];

        Status::create($data);
    }
}
