<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BlogTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testRoutes()
    {
    	// Test Blog Route...
        $this->visit('/')->see('Muz\'s Blog');
        
        // Test Authentication Routes...
        $this->visit('/auth/login'); //->see('Login');			// TODO POST test			
        $this->visit('/auth/register'); //->see('Register');	// TODO POST test
        $this->visit('/auth/logout')->see('Blog');       		// TODO Logout ... thanks ... Redirect to /
   
		// Test Menu Routes...
		// TODO visit menu routes
		/*
		Route::get('/', function () {return view('blog', ['entries' => Entry::all()]);  });
		// About route...
		Route::get('about', function() { return view('about'); });
		
		// Authentication routes...
		// Login...
		Route::get('/auth/login', 'Auth\AuthController@getLogin');
		Route::post('/auth/login', 'Auth\AuthController@postLogin');
		// Logout...
		Route::get('/auth/logout', 'Auth\AuthController@getLogout');
		// Registration routes...
		Route::get('/auth/register', 'Auth\AuthController@getRegister');
		Route::post('/auth/register', 'Auth\AuthController@postRegister'); 
		 */
    }
    
    
}

