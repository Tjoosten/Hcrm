<?php

use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Improve the descriptions.
        \DB::table('products_categories')->delete();

        $data = [
            [
                'category'    => 'CDN',
                'description' => 'CDN description',
            ],
            [
                'category'    => 'Colocation',
                'description' => 'Colocation description',
            ],
            [
                'category'    => 'Domain names',
                'description' => 'Domain names description',
            ],
            [
                'category'    => 'Webhosting',
                'description' => 'Webhosting description',
            ],
            [
                'category'    => 'Dedicated servers',
                'description' => 'Dedicated servers description',
            ],
            [
                'category'    => 'Virtual servers',
                'description' => 'Virtual servers description',
            ]
        ];

        \DB::table('products_categories')->insert($data);
    }
}
