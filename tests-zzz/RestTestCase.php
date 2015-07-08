<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class RestTestCase extends TestCase
{
	/**
	 * The name of the REST routes to test.
	 *
	 * @var string
	 */
	protected $testRoute = 'rest';
	protected $testId = '2';
	
	/**
	 Test Cases for REST Controllers
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
		$this->visit('/'.$this->testRoute);
	}
	
	public function testCreate()
	{
		$this->visit('/'.$this->testRoute.'/create');
	}
	
	public function testStore()
	{
		//$this->visit('/'.$this->testRoute);
	}
	
	public function testShow()
	{
		$this->visit('/'.$this->testRoute.'/create');
	}
	
	public function testEdit()
	{
		$this->visit('/'.$this->testRoute.'/create');
		$this->visit('/user/1/edit')
		//->type('Taylor', 'name')
		//->check('terms')
		//->press('Register')
		//->seePageIs('/dashboard')
		;
	}
	
	public function testUpdate()
	{
		$this->visit('/'.$this->testRoute.'/create');
		$this->visit('/user');
	}
	
	public function testDestroy()
	{
		$this->visit('/'.$this->testRoute.'/create');
		$this->visit('/user');
	}
	
}
