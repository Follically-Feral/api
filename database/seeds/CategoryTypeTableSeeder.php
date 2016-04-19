<?php

use FollicallyFeral\Models\CategoryType;
use Illuminate\Database\Seeder;

class CategoryTypeTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $categoryType = CategoryType::create([
            'name' => 'Photos'
        ]);

        print "Created category type ".$categoryType->name."\n";

        $categoryType = CategoryType::create([
            'name' => 'Products'
        ]);

        print "Created category type ".$categoryType->name."\n";

    }

}