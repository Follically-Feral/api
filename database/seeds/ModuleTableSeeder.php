<?php

use Illuminate\Database\Seeder;
use FollicallyFeral\Models\Module;

class ModuleTableSeeder extends Seeder {

    public function run() {

        $module = Module::create([
            "key"=>'MM',
            "name"=>'Management Module',
            "description"=>"Management module for Imbalance Gaming site."
        ]);

        print "Module: ".$module->name."\n";

        $module = Module::create([
            "key"=>'PM',
            "name"=>'Public Module',
            "description"=>'Public module for Imbalance Gaming site'
        ]);

        print "Module: ".$module->name."\n";

    }

}