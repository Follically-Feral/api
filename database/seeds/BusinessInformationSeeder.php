<?php

use Illuminate\Database\Seeder;

class BusinessInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('business_information')->insert([
        	'name' => 'Folically Feral',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque mi quis massa molestie, eget maximus nulla posuere. Nulla tempor nunc eu vulputate malesuada. Etiam pretium, ipsum at posuere accumsan, tortor leo facilisis felis, eu facilisis orci libero et nulla. Maecenas bibendum metus eu bibendum imperdiet. Curabitur erat sapien, viverra ac sapien eget, laoreet malesuada ex. Praesent ac elit sit amet erat posuere congue. Aenean interdum augue justo, id maximus mauris sollicitudin id. Integer malesuada imperdiet diam eu pharetra. Etiam quis pellentesque turpis, nec molestie nunc. Donec aliquam ante sapien, eget accumsan ex ultricies et. Ut tristique pharetra ante, ut porttitor mi consectetur ac.',
        	'email' => 'folicallyferal@gmail.com',
        	'phone' => '01752 336271',
        	'address' => 'Plymouth, Pl4 6PJ, 5 Aplsey Road',
        ]);
    }
}
