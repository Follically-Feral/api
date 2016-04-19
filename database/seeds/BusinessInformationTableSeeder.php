<?php

use FollicallyFeral\Models\BusinessInformation;
use Illuminate\Database\Seeder;

class BusinessInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businessInfo = BusinessInformation::create([
            'name' => 'Folically Feral',
            'description' => 'An awesome beard company.',
            'email' => 'follicallyferal@gmail.com',
            'phone' => '01752 336271',
            'address' => 'Plymouth, Pl4 6PJ, 5 Aplsey Road'
        ]);

        print "Business info for ".$businessInfo->name." created\n";
    }
}
