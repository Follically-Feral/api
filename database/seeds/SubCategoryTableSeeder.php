<?php

use FollicallyFeral\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $subCategory = SubCategory::create([
            'name' => 'Beard Balm',
            'description' => 'To keep that beard healthy',
            'category_id' => 1
        ]);

        print "Sub Category created ".$subCategory->name."\n";

    }

}