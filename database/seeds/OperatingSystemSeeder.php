<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category' => 'OS', 'name' => 'CentOS 5 (i386)'],
            ['category' => 'OS', 'name' => 'CentOS 5 (x86_64)'],
            ['category' => 'OS', 'name' => 'CentOS 6 (i386)'],
            ['category' => 'OS', 'name' => 'CentOS 6 (x86_64)'],
            ['category' => 'OS', 'name' => 'Debian 7.0 (x86)'],
            ['category' => 'OS', 'name' => 'Debian 7.0 (x86_64)'],
            ['category' => 'OS', 'name' => 'Ubuntu 12.04 (amd64)'],
            ['category' => 'OS', 'name' => 'Ubuntu 12.04 (x86)']
        ];

        DB::table('server_softwares')->delete();
        DB::table('server_softwares')->insert($data);
    }
}
