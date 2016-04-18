<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(BasketSeeder::class);
        $this->call(BusinessInformationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(WeightSeeder::class);
    }
}
