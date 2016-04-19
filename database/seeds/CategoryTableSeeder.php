<?php

use FollicallyFeral\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        $category = Category::create([
            'name' => 'Beards',
            'description' => 'For all your beard needs.',
            'category_type_id' => 2,
        ]);

        print "Created category ".$category->name."\n";

        $category = Category::create([
            'name' => 'Skin Care',
            'description' => 'Products to make your skin feel great.',
            'category_type_id' => 2,
        ]);

        print "Created category ".$category->name."\n";
    }
}
