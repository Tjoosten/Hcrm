<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call(StatusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CountrySeeder::class);
        //$this->call(NotificationSeed::class);
        $this->call(TicketsSeeder::class);
        $this->call(AccessControlSeeder::class);
        $this->call(TicketGroupSeeder::class);
        $this->call(ContactTypesSeeder::class);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(OperatingSystemSeeder::class);

        if (env('APP_ENV') === 'testing' || env('APP_ENV') === 'local' || env('APP_DEBUG') === 'true' ) {
            // For testing propose
            factory(App\DedicatedServers::class)->create();
            factory(App\Customers::class)->create();
            factory(App\Departments::class)->create();
            factory(App\Knowledge::class)->create();
            factory(App\Servers::class)->create();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
