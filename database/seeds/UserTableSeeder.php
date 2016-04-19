<?php

use Faker\Factory as Faker;
use FollicallyFeral\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $faker = Faker::create();

        $password = '10Banana12';
        $user = User::create([
            'username'=>'c.pratt',
            'password'=>Hash::make($password),
            'email'=>'chrispratt1985@gmail.com',
            'role'=>'Administrator',
            'email_verified'=>true,
            'forename'=>'Christopher',
            'surname'=>'Pratt',
            'dob'=>$faker->date(),
            'country'=>$faker->country,
            'website'=>$faker->url,
            'avatar'=>$faker->image('resources/avatars', 60, 60),
//            'avatar'=>'',
            'twitter_username'=>'c.pratt',
            'facebook'=>$faker->url
        ]);

        print "Email: ".$user->email." Password: ".$password."\n";

        $password = 'Password1';
        $user = User::create([
            'username'=>'Ryan',
            'password'=>Hash::make($password),
            'email'=>'ryanpearce@gmail.com',
            'role'=>'Administrator',
            'email_verified'=>true,
            'forename'=>'Ryan',
            'surname'=>'Pearce',
            'dob'=>$faker->date(),
            'country'=>$faker->country,
            'website'=>$faker->url,
            'avatar'=>$faker->image('resources/avatars', 60, 60),
//            'avatar'=>'',
            'twitter_username'=>'c.pratt',
            'facebook'=>$faker->url
        ]);

        print "Email: ".$user->email." Password: ".$password."\n";

        $password = 'Password1';
        $user = User::create([
            'username'=>'Sam',
            'password'=>Hash::make($password),
            'email'=>'samberry@gmail.com',
            'role'=>'Administrator',
            'email_verified'=>true,
            'forename'=>'Sam',
            'surname'=>'Berry',
            'dob'=>$faker->date(),
            'country'=>$faker->country,
            'website'=>$faker->url,
            'avatar'=>$faker->image('resources/avatars', 60, 60),
//            'avatar'=>'',
            'twitter_username'=>'c.pratt',
            'facebook'=>$faker->url
        ]);

        print "Email: ".$user->email." Password: ".$password."\n";

        $password = 'imbalanceAdmin';
        $user = User::create([
            'username'=>'admin',
            'password'=>Hash::make($password),
            'email'=>'admin@follicallyferal.com',
            'role'=>'Administrator',
            'email_verified'=>true,
            'forename'=>'Admin',
            'surname'=>'User'
        ]);

        print "Email: ".$user->email." Password: ".$password."\n";

        factory(\FollicallyFeral\Models\User::class, 30)->create()->each(function(\FollicallyFeral\Models\User $u) {
            print "Email: ".$u->email."\n";
        });
    }
}
