<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('product')->insert([
        	'name' => 'Invoice 1',
        	'description' => 'sadmaskndak12312',
        	'usage_description' => '30.00',
        	'price' => '3.oo',
        	'star_rating' => '5',
        	'active' => '1',
        ]);
    }
}
