<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('permission')->insert([
			'name' => 'Name 1',
			'description' => 'Lorem Ipsun dennet arunt aknean ill paun eane',
			'access' => '1',
			'create' => '1',
			'edit' => '1',
			'delete' => '1',
        ]);
    }
}
