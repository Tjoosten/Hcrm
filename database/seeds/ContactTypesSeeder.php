<?php

use Illuminate\Database\Seeder;

class ContactTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Administration'],
            ['name' => 'Technical'],
            ['name' => 'Support']
        ];

        $table = DB::table('contact_types');
        $table->delete();
        $table->insert($data);
    }
}
