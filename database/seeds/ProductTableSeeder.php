<?php

use FollicallyFeral\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $product = Product::create([
            'name' => 'Ginger Beard Balm',
            'description' => 'Beard balm for all those gingers out there',
            'usage_description' => 'Apply once per day',
            'price' => 3.00,
            'star_rating' => 5,
            'active' => true,
        ]);

        print "Created product ".$product->name."\n";
    }
}
