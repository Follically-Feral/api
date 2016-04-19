<?php

use FollicallyFeral\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $ingredient = Ingredient::create([
            'name' => 'Essential Oil',
            'description' => 'An Oil',
            'price' => 1.00,
            'weight_amount' => 0.33,
            'weight_id' => 1,
        ]);

        print "Created ingredient ".$ingredient->name."\n";

        $ingredient = Ingredient::create([
            'name' => 'Wax',
            'description' => 'An bloke of ear stuff',
            'price' => 1.00,
            'weight_amount' => 0.33,
            'weight_id' => 2,
        ]);

        print "Created ingredient ".$ingredient->name."\n";

        $ingredient = Ingredient::create([
            'name' => 'Cats Tails',
            'description' => 'Because all witches potions need this',
            'price' => 1.00,
            'weight_amount' => 0.33,
            'weight_id' => 2,
        ]);

        print "Created ingredient ".$ingredient->name."\n";

    }
}
