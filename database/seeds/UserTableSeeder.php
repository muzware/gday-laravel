<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
	protected $seed_count = 10; // TODO move this somewhere more appropriate ... into test environment for example
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create admin account
    	$user = factory(App\User::class)->make([
    			'name' => 'admin',
    			'email' => 'muzware@gmail.com',
    			'password' => bcrypt('admin')
    	]);
    	DB::table('users')->insert($user['attributes']);
    	
    	// Now seed the rest of user table with some fake users
    	for ($i=0; $i < $this->seed_count; $i++ ) {
    		// Create a user with the model factory
    		$user = factory(App\User::class)->make();
    		// Insert new user into the database
    		DB::table('users')->insert($user['attributes']);
    	}
    }
}
