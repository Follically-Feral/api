<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('module')->insert([
        	'name' => 'Module 1',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        ]);
        DB::Table('module')->insert([
        	'name' => 'Module 2',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        ]);
        DB::Table('module')->insert([
        	'name' => 'Module 3',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        ]);
        DB::Table('module')->insert([
        	'name' => 'Module 4',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        ]);
    }
}
