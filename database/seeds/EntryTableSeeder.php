<?php

use Illuminate\Database\Seeder;


class EntryTableSeeder extends Seeder
{
	protected $test_count = 200; // TODO move this somewhere more appropriate
	
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create a set of new Blog Entries for seeding the test database
    	for ($i=0; $i < $this->test_count; $i++ ) {
    		// Create a new blog entry with the model factory
    		$comment = factory(App\Entry::class)->make();
    		// Insert the new entry into the database
    		DB::table('entries')->insert($comment['attributes']);
    	}
    }
}
