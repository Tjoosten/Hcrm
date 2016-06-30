<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\Database\Role;
use Silber\Bouncer\Database\Ability;

class AccessControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        \DB::table('abilities')->delete();

        Role::create(['name' => 'Administration']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Technical']);

        Ability::create(['name' => 'create customer']);
        Ability::create(['name' => 'list customer']);
        Ability::create(['name' => 'edit customer']);
        Ability::create(['name' => 'remove customer']);

        Ability::create(['name' => 'create department']);
        Ability::create(['name' => 'list departments']);
        Ability::create(['name' => 'edit department']);
        Ability::create(['name' => 'remove department']);

        Ability::create(['name' => 'create ticket']);
        Ability::create(['name' => 'list tickets']);
        Ability::create(['name' => 'edit ticket']);
        Ability::create(['name' => 'remove ticket']);

        Ability::create(['name' => 'create user']);
        Ability::create(['name' => 'list users']);
        Ability::create(['name' => 'edit user']);
        Ability::create(['name' => 'remove user']);

        // Connect abilities to the Admin role.
        $adminAbilities = [
            'create customer', 'list customer', 'edit customer', 'remove customer',
            'create department', 'list department', 'edit department', 'remove department',
            'create ticket', 'list tickets', 'edit ticket', 'remove ticket',
            'create user', 'list users', 'edit user', 'remove user'
        ];

        Bouncer::allow('Admin')->to($adminAbilities);

    }
}
