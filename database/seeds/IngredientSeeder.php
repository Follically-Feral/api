<?php

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('ingredient')->insert([
        	'name' => 'Ingredient 1',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        	'price' => '1.00',
        	'weight_amount' => '0.33',
        	'weight_id' => '3',
        ]);
        DB::Table('ingredient')->insert([
        	'name' => 'Ingredient 2',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        	'price' => '1.00',
        	'weight_amount' => '0.33',
        	'weight_id' => '3',
        ]);
        DB::Table('ingredient')->insert([
        	'name' => 'Ingredient 3',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie',
        	'price' => '1.00',
        	'weight_amount' => '0.33',
        	'weight_id' => '3',
        ]);

    }
}
