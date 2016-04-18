<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('news')->insert([
        	'title' => 'Module 1',
        	'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        	'user_id' => '3',
        ]);
        DB::Table('news')->insert([
        	'title' => 'Module 2',
        	'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        	'user_id' => '3',
        ]);
        DB::Table('news')->insert([
        	'title' => 'Module 3',
        	'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        	'user_id' => '3',
        ]);
    }
}
