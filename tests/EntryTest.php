<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EntryTest extends TestCase
{
	// Disable middlware CSRF checks to enable testing
	use WithoutMiddleware;
	
    /**
     Test Cases for Entry Controller
     ===============================
     Derive test cases from the table below (see Laravel Controllers docs)
     The 'View classname' column provides a key to embedded in the view file
     
     Verb 		Path 				Action 		Route Name		View classname
     -------------------------------------------------------------------------
     GET 		/entry 				index 		entry.index		entry-index
     GET 		/entry/create 		create 		entry.create	entry-create
     POST 		/entry 				store 		entry.store		entry-store
     GET 		/entry/{entry} 		show 		entry.show		entry-show
     GET 		/entry/{entry}/edit edit 		entry.edit		entry-edit
     PUT/PATCH 	/entry/{entry} 		update 		entry.update	entry-update
     DELETE 	/entry/{entry} 		destroy 	entry.destroy	entry-destroy
     */    
    
    public function testIndex()
    {
    	// Test GET index action
    	$this->visit('/entry');
    	// TODO more elaborate testing
    }

    public function testCreate()
    {
    	// Test GET create action
    	$this->visit('/entry/create')
        	->type('Create Title', 'title')
        	->type('Create Body', 'body')
         	->press('Save')
         	->seePageIs('/entry');
    	// TODO more elaborate testing
    }
    
    public function testStore()
    {
    	// Create test entry
    	$entry = [
    		'title' => 'Store Title',
    		'body' => 'Store Body'
    	];
    	// Test POST store action
    	$this->post('/entry', $entry)
    		->seePageIs('/entry');
    	// TODO more elaborate testing
    }
    
    public function testShow()
    {
    	// Select id for test
    	$id = 20;
    	// Test GET show action
    	$this->visit('/entry/'.$id);
    	// TODO more elaborate testing
    }
    
    public function testEdit()
    {
    	// Select id for test 
    	$id = 20;
    	// Test GET edit action
    	$this->visit('/entry/'.$id.'/edit')
        	->type('Edit Title', 'title')
        	->type('Edit Body', 'body')
         	->press('Save')
         	->seePageIs('/entry/'.$id);
    	// TODO more elaborate testing
    }
    
    public function testUpdate()
    {
    	// Select id for test  
    	$id = 100;
    	// Create test entry
    	$entry = [
    		'id' => $id,
    		'title' => 'Update Title',
    		'body' => 'Update Body'
    	];
    	// Test PUT update action
    	$this->put('/entry/'.$id, $entry)
    		->seePageIs('/entry/'.$id);
    	// TODO more elaborate testing

    	// Test PATCH update action
    	$this->patch('/entry/'.$id, $entry)
    		->seePageIs('/entry/'.$id);
    	// TODO more elaborate testing
    }
    
    public function testDestroy()
    {
    	// Select id for test 
    	// TODO get id from somewhere sensible
    	$id = 130;
    	// Test DELETE action
    	$this->delete('/entry/'.$id)
    		->seePageIs('entry/'.$id);
    	// TODO more elaborate testing
    }
}

