<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
	protected $seed_count = 50; // TODO move seed count somewhere more appropriate
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < $this->seed_count; $i++ ) {
    		// Create a user with the model factory
    		$comment = factory(App\Comment::class)->make();
    		// Insert the new comment into the database
    		DB::table('comments')->insert($comment['attributes']);
    	}
    }
}
