<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     Test Cases for User Controller
     ===============================
     Derive test cases from route names below
     The 'View classname' column provides a key embedded in the view file,
     and used for basic testing purposes. 
     
     Verb 		Path 				Action 		Route Name		View classname
     -------------------------------------------------------------------------
     GET 		/user 				index 		user.index		user-index
     GET 		/user/create 		create 		user.create		user-create
     POST 		/user 				store 		user.store		user-store
     GET 		/user/{user} 		show 		user.show		user-show
     GET 		/user/{user}/edit 	edit 		user.edit		user-edit
     PUT/PATCH 	/user/{user} 		update 		user.update		user-update
     DELETE 	/user/{user} 		destroy 	user.destroy	user-destroy
     */    
    
    public function testIndex()
    {
    	$this->visit('/user');
    }

    public function testCreate()
    {
    	$this->visit('/user');
    }
    
    public function testStore()
    {
    	$this->visit('/user');
    }
    
    public function testShow()
    {
    	$this->visit('/user');
    }
    
    public function testEdit()
    {
    	//$this->visit('/user/1/edit');
	    	//->type('Taylor', 'name')
    		//->check('terms')
    		//->press('Register')
    		//->seePageIs('/dashboard')
    }
    
    public function testUpdate()
    {
    	$this->visit('/user');
    }
    
    public function testDestroy()
    {
    	$this->visit('/user');
    }
    
}

