<?php
/**
 * 
 */
use App\User;
use App\Entry;
use App\Comment;

// The following routes serve the nav bar
////////////////////////////////////////
// Default route ... to the Blog!
Route::get('/', function () {
	// Get all the entries
	$entries = Entry::all()->sortByDesc(function($entry) {
		return $entry->updated_at;
	});
	// Return the view rendered with all the entries 
	return view('blog', ['entries' => $entries]);  
});
// About route...
Route::get('about', function() { return view('about'); });

// Authentication routes...
// Login...
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
// Logout...
Route::get('/auth/logout', 'Auth\AuthController@getLogout');
// TOD Registration routes...
//Route::get('/auth/register', 'Auth\AuthController@getRegister');
//Route::post('/auth/register', 'Auth\AuthController@postRegister');

// Routes requiring authentication ...
Route::group(['middleware' => 'auth'], function () {
	// RESTful resource controller routes...
	Route::resource('user', 'UserController',
			array('except' => array('create', 'store')) // Users are created via Auth registration
	);
	Route::resource('entry', 'EntryController');
	//Route::resource('comment', 'CommentController');
});

	
	
	