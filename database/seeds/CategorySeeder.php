<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('category')->insert([
        	'name' => 'Beard Shampo',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        	'type_id' => '2',
        ]);
        DB::Table('category')->insert([
        	'name' => 'Beard Conditioner',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        	'type_id' => '5',
        ]);
    }
}
