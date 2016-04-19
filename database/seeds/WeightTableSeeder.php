<?php

use FollicallyFeral\Models\Weight;
use Illuminate\Database\Seeder;

class WeightTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $weight = Weight::create([
            'name' => 'Milliliter ',
            'type' => 'liquid'
        ]);

        print "Created weight ".$weight->name."\n";

        $weight = Weight::create([
            'name' => 'Gram  ',
            'type' => 'solid'
        ]);

        print "Created weight ".$weight->name."\n";

    }
}
