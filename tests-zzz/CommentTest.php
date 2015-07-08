<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CommentTest extends TestCase
{
	// Disable middlware CSRF checks to enable testing
	use WithoutMiddleware;
	
    /**
     Test Cases for Comment Controller
     ===============================
     Derive test cases from the table below (see Laravel Controllers docs)
     The 'View classname' column provides a key to embedded in the view file
     
     Verb 		Path 				Action 		Route Name			View classname
     -----------------------------------------------------------------------------
     GET 		/comment 				index 		comment.index	comment-index
     GET 		/comment/create 		create 		comment.create	comment-create
     POST 		/comment 				store 		comment.store	comment-store
     GET 		/comment/{comment} 		show 		comment.show	comment-show
     GET 		/comment/{comment}/edit edit 		comment.edit	comment-edit
     PUT/PATCH 	/comment/{comment} 		update 		comment.update	comment-update
     DELETE 	/comment/{comment} 		destroy 	comment.destroy	comment-destroy
     */    
    
    public function testIndex()
    {
    	// Test GET index action
    	$this->visit('/comment');
    	// TODO more elaborate testing
    }

    private function testCreate()
    {
    	// Test GET create action
    	$this->visit('/comment/create')
        	->type('Create Body', 'body')
         	->press('Save');
         	//->seePageIs('/comment');
    	// TODO more elaborate testing
    }
    
    private function testStore()
    {
    	// Create test comment
    	$comment = [
    		'body' => 'Store Body'
    	];
    	// Test POST store action
    	$this->post('/comment', $comment)
    		->seePageIs('/comment');
    	// TODO more elaborate testing
    }
    
    public function testShow()
    {
    	// Select id for test
    	$id = 11;
    	// Test GET show action
    	$this->visit('/comment/'.$id);
    	// TODO more elaborate testing
    }
    
    private function testEdit()
    {
    	// Select id for test 
    	$id = 11;
    	// Test GET edit action
    	$this->visit('/comment/'.$id.'/edit')
        	->type('Edit Body', 'body')
         	->press('Save')
         	->seePageIs('/comment/'.$id);
    	// TODO more elaborate testing
    }
    
    private function testUpdate()
    {
    	// Select id for test  
    	$id = 12;
    	// Create test comment
    	$comment = [
    		'id' => $id,
    		'body' => 'Update Body'
    	];
    	// Test PUT update action
    	$this->put('/comment/'.$id, $comment)
    		->seePageIs('/comment/'.$id);
    	// TODO more elaborate testing

    	// Test PATCH update action
    	$this->patch('/comment/'.$id, $comment)
    		->seePageIs('/comment/'.$id);
    	// TODO more elaborate testing
    }
    
    private function testDestroy()
    {
    	// Select id for test 
    	// TODO get id from somewhere sensible
    	$id = 30;
    	// Test DELETE action
    	$this->delete('/comment/'.$id)
    		->seePageIs('comment/'.$id);
    	// TODO more elaborate testing
    }
}

