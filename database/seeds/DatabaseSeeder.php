<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    private $_tableNames = [
        'user',
        'group',
        'group_membership',
        'module',
        'module_section',
        'component',
        'menu',
        'permission_assignment',
        'module_section_access',
        'permission',
        'business_information',
        'category_type',
        'category',
        'sub_category',
        'ingredient',
        'news',
        'product',
        'weight'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $this->cleanDatabase();

        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(BusinessInformationTableSeeder::class);
        $this->call(CategoryTypeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(WeightTableSeeder::class);
        $this->call(IngredientTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(ModuleSectionTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(ProductTableSeeder::class);

        Model::reguard();

    }

    public function cleanDatabase() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        foreach ($this->_tableNames as $tableName) {
            DB::table($tableName)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}
