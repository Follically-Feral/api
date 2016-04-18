<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('order')->insert([
        	'invoice_number' => 'Invoice 1',
        	'tracking_number' => 'sadmaskndak12312',
        	'total' => '30.00',
        	'user_id' => '3',
        ]);
        DB::Table('order')->insert([
        	'invoice_number' => 'Invoice 1',
        	'tracking_number' => 'sadmaskndak12312',
        	'total' => '30.00',
        	'user_id' => '4',
        ]);
        DB::Table('order')->insert([
        	'invoice_number' => 'Invoice 1',
        	'tracking_number' => 'sadmaskndak12312',
        	'total' => '30.00',
        	'user_id' => '5',
        ]);
    }
}
