<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(NotificationSeed::class);

        // For testing propose
        factory(App\Customers::class)->create();
        factory(App\Departments::class)->create();
    }
}
