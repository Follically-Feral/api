<?php

use Illuminate\Database\Seeder;
use FollicallyFeral\Models\Group;

class GroupTableSeeder extends Seeder {

    public function run() {

        $group = Group::create([
            'name'=>'Users',
            'description'=>'General group for users'
        ]);

        print "Group: ".$group->name."\n";

        $group = Group::create([
            'name'=>'Developers',
            'description'=>'Users who will be developing applications for hosting on the site'
        ]);

        print "Group: ".$group->name."\n";

        /** @var Group $group */
        $group = Group::create([
            'name'=>'Admins',
            'description'=>'Users with full access to the system'
        ]);

        print "Group: ".$group->name."\n";

        $group->users()->attach(1);
        $group->users()->attach(2);

    }

}