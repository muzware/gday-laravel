<?php
/*
Actions Handled By Entry Controller
===================================
Verb 		Path 				Action 		Route Name
------------------------------------------------------
GET 		/entry 				index 		entry.index
GET 		/entry/create 		create 		entry.create
POST 		/entry 				store 		entry.store
GET 		/entry/{entry} 		show 		entry.show
GET 		/entry/{entry}/edit edit 		entry.edit
PUT/PATCH 	/entry/{entry} 		update 		entry.update
DELETE 		/entry/{entry} 		destroy 	entry.destroy
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EntryController extends BlogController
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all the entries
		$entries = Entry::all()->sortByDesc(function($entry) {
			return $entry->updated_at;
		}, SORT_REGULAR);

		// Initialise view parameters
		$params = [
				'title' => 'All Entries',
				'entries' => $entries
		];
		
		// Return the rendered view
		return view('blog.entry.index', $params);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Create a new entry
		$entry = new Entry;

		// Initialise view parameters
		$params = [
				'title' => 'Create Blog Entry',
				'entry' => $entry
		];
		
		// Return the rendered view
		return view('blog.entry.create', $params);
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// Store update Entry in the database
		$entry = new Entry;
		$entry->title = $request->input('title');
		$entry->body = $request->input('body');
		$entry->save();
		
		// Initialise view parameters
		$params = [
				'title' => 'Stored Blog Entry',
				'entry' => $entry
		];
		
		// Return the rendered view
		return view('blog.entry.store', $params);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$entry = Entry::findOrNew($id);
		$params = [
				'title' => 'Show Blog Entry',
				'entry' => $entry,
				'comments' => array()
		];
		return view('blog.entry.show', $params);
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$entry = Entry::findOrFail($id);
		// TODO update db
		$params =[
				'title' => 'Edit Blog Entry',
				'entry' => $entry
		];
		return view('blog.entry.edit', $params);
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		// Store updated Entry in the database
		$entry = Entry::findOrNew($id);
		$entry->title = $request->input('title'); // or $request->only('title', 'body');
		$entry->body = $request->input('body');
		$entry->save();
		
		// Initialise view parameters
		$params = [
				'title' => 'Updated Blog Entry',
				'entry' => $entry
		];
		// Return the rendered view
		return view('blog.entry.update', $params);
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Delete the database entry
		$entry = Entry::findOrFail($id);
		$entry->delete();
		$params = [
				'title' => 'Destroyed Blog Entry!',
				'entry' => $entry
		];
		return view('blog.entry.destroy', $params);
	}	
}
