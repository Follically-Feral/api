<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('user')->insert([
        	'username' => 'Chris',
        	'email' => 'chrispratt@gmail.com',
        	'email_verified' => '1',
        	'email_verified_code' => 'asknfwij211wkmdNN',
        	'password' => Hash::make('password'),
			'forename' => 'Chris',
			'surname' => 'Pratt',
			'last_login' => '2016/04/10',        	
			'active' => '0',
			'role' => 'Admin',
        ]);
        DB::Table('user')->insert([
        	'username' => 'Ryan',
        	'email' => 'ryanpearce@gmail.com',
        	'email_verified' => '1',
        	'email_verified_code' => 'asknfwij211wkmdNN',
        	'password' => 'Password1',
			'forename' => 'Ryan',
			'surname' => 'Pearce',
			'last_login' => '2016/04/11',        	
			'active' => '1',
			'role' => 'Admin',
        ]);
        DB::Table('user')->insert([
        	'username' => 'Sam',
        	'email' => 'samberry@gmail.com',
        	'email_verified' => '1',
        	'email_verified_code' => 'asknfwij211wkmdNN',
        	'password' => Hash::make('password'),
			'forename' => 'Sam',
			'surname' => 'Berry',
			'last_login' => '2016/02/11',        	
			'active' => '0',
			'role' => 'Admin',
        ]);
    }
}
