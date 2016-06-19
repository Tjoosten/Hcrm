<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        $data['name']     = 'Administrator';
        $data['email']    = 'admin@hcrm.be';
        $data['password'] = bcrypt('demo123456');

        User::create($data);
    }
}
